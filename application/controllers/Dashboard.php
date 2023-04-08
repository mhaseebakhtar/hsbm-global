<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();

        // load URL helper
        $this->loggedIn = $this->session->userdata('loggedIn');
        $this->user_id = $this->session->userdata('user_id');

        $this->user = $this->handler->getRows(array('id' => $this->user_id), 'users');
        if (!$this->user) {
            $this->clearUser();
            redirect('admin/login');
        }
    }

    public function index() {
        if ($this->loggedIn) {
            redirect('admin/dashboard');
        } else {
            redirect('admin/login');
        }
    }

    public function dashboard() {
        if ($this->loggedIn) {
            $data['globalSettings'] = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');

            $data['user'] = $this->user;

            $this->load->view('dashboard/index', $data);
        } else {
            redirect('admin/login');
        }
    }

    public function login() {
        if ($this->loggedIn) {
            redirect('admin/dashboard');
        } else {
            $data = array('error_msg' => '');
            $data['globalSettings'] = $global = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');

            if ($this->input->post('submit')) {
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if ($this->form_validation->run()) {
                    $con = array(
                        'returnType' => 'single',
                        'conditions' => array(
                            'email' => $this->input->post('email'),
                            'password' => md5($this->input->post('password')),
                            'type' => '0'
                        )
                    );

                    $checkLogin = $this->handler->getRows($con, 'users');
                    if ($checkLogin) {
                        $this->session->set_userdata('loggedIn', TRUE);
                        $this->session->set_userdata('user_id', $checkLogin->id);

                        redirect('admin/dashboard');
                    } else {
                        $data['error_msg'] = 'Invalid Email or Password';
                    }
                }
            }

            $view = $global['login-boxed'] ? 'dashboard/login-boxed' : 'dashboard/login-full';
            $this->load->view($view, $data);
        }
    }

    public function blogCategories() {
        if ($this->loggedIn) {
            $data = array('error_msg' => '', 'success_msg' => '');
            $data['globalSettings'] = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');

            $data['user'] = $this->user;

            $limit = 20;
            $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
            $total = $this->handler->getTotalCount('blog_categories');
            $data['categories'] = $this->handler->get($limit, $page * $limit, 'blog_categories');
            if ($total) {
                $base_url = base_url('admin/blog-categories');
                // custom paging configuration
                $config = $this->handler->customPagination($base_url, $total, $limit);

                $this->pagination->initialize($config);

                // build paging links
                $data["links"] = $this->pagination->create_links();
            }

            $this->load->view('dashboard/blog-categories', $data);
        } else {
            redirect('admin/login');
        }  
    }

    public function subscribers() {
        if ($this->loggedIn) {
            $data = array('error_msg' => '', 'success_msg' => '');
            $data['globalSettings'] = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');

            $data['user'] = $this->user;

            $limit = 20;
            $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;
            $total = $this->handler->getTotalCount('subscribers');
            $data['subscribers'] = $this->handler->get($limit, $page * $limit, 'subscribers');
            if ($total) {
                $base_url = base_url('admin/subscribers');
                // custom paging configuration
                $config = $this->handler->customPagination($base_url, $total, $limit);

                $this->pagination->initialize($config);

                // build paging links
                $data["links"] = $this->pagination->create_links();
            }

            if ($this->input->post('submit')) {
                $this->form_validation->set_rules('receiver_email', 'Receiver Email', 'required');
                $this->form_validation->set_rules('subject', 'Email Subject', 'required');
                $this->form_validation->set_rules('body', 'Email body', 'required');

                if ($this->form_validation->run()) {
                    $emailStr = $this->input->post('receiver_email');
                    $emails = explode(', ', $emailStr);

                    foreach ($emails as $email) {
                        $params = array(
                            'subject' => $this->input->post('subject'),
                            'body' => $this->input->post('body')
                        );

                        $mail = $this->mail->sendOtherMail($email, $params);
                    }

                    if ($mail) {
                        $data['success_msg'] = 'Email sent successfully!';
                    } else {
                        $data['error_msg'] = 'Some error occurred, please try again!';
                    }
                } else {
                    $data['error_msg'] = 'Please enter all the required fields!';
                }
            }

            $this->load->view('dashboard/subscribers', $data);
        } else {
            redirect('admin/login');
        }
    }

    // settings
    public function account() {
        if ($this->loggedIn) {
            $data = array('error_msg' => '', 'success_msg' => '');
            $data['globalSettings'] = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');

            $data['user'] = $this->user;
            if ($this->input->post('submit')) {
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

                if ($this->form_validation->run()) {
                    $upload = array(
                        'id' => $this->user_id,
                        'name' => strip_tags($this->input->post('name')),
                        'email' => strip_tags($this->input->post('email'))
                    );

                    $action = $this->handler->update($upload, 'users');
                    if ($action) {
                        $data['success_msg'] = 'Account updated successfully!';
                    } else {
                        $data['error_msg'] = 'Some error occurred, please try again!';
                    }
                }
            }

            if ($this->input->post('confirm')) {
                $this->form_validation->set_rules('oldpassword', 'Old Password', 'required|callback_password_check');
                $this->form_validation->set_rules('password', 'New Password', 'required|differs[oldpassword]');
                $this->form_validation->set_rules('confpassword', 'Confirm Password', 'required|matches[password]');

                if ($this->form_validation->run()) {
                    $userData = array(
                        'password' => md5($this->input->post('password')),
                        'id' => $this->user_id
                    );

                    $update = $this->handler->update($userData, 'users');
                    if ($update) {
                        $data['success_msg'] = 'Your changes have been saved!';
                    } else {
                        $data['error_msg'] = 'Some problems occurred, please try again';
                    }
                }
            }

            $this->load->view('dashboard/account', $data);
        } else {
            redirect('admin/login');
        }
    }

    public function globalSettings() {
        if ($this->loggedIn) {
            $data['globalSettings'] = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');

            $data['user'] = $this->user;

            $this->load->view('dashboard/global-settings', $data);
        } else {
            redirect('admin/login');
        }
    }

    public function mail() {
        if ($this->loggedIn) {
            $data = array('error_msg' => '', 'success_msg' => '');
            $data['globalSettings'] = $this->handler->getSettings('global');
            $data['colorSettings'] = $this->handler->getSettings('color');
            $data['mailSettings'] = $this->handler->getSettings('mail');
            $data['user'] = $this->user;
            if ($this->input->post('submit')) {
                $this->form_validation->set_rules('receiver_email', 'Reciever Email', 'required|valid_email');
                $this->form_validation->set_rules('sender_title', 'Sender Title', 'required');
                $this->form_validation->set_rules('sender_email', 'Sender Email', 'required|valid_email');

                if ($this->form_validation->run()) {
                    $mailData = array(
                        'sender_title' => strip_tags($this->input->post('sender_title')),
                        'sender_email' => strip_tags($this->input->post('sender_email')),
                        'receiver_email' => strip_tags($this->input->post('receiver_email'))
                    );

                    $insert = $this->handler->setSettings($mailData, 'mail');
                    if ($insert) {
                        $data['success_msg'] = 'Your changes have been saved!';
                    } else {
                        $data['error_msg'] = 'Some problems occurred, please try again';
                    }
                }
            }

            $this->load->view('dashboard/mail-settings', $data);
        } else {
            redirect('admin/login');
        }
    }

    public function save() {
        $response = array('status' => false);
        if ($this->input->post('save')) {

            $data = array(
                $this->input->post('type') => $this->input->post('value')
            );

            $save = $this->handler->setSettings($data, $this->input->post('setting'));
            if ($save) {
                if ($this->input->post('other')) {
                    $data = array(
                        $this->input->post('other') => '0'
                    );

                    $this->handler->setSettings($data, $this->input->post('setting'));
                }

                $response = array('status' => true, 'message' => 'Settings Saved Successfully');
            }
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function delete() {
        $response = array('status' => false);

        if ($this->input->post('type')) {
            $id = $this->input->post('id');
            $table = $this->input->post('type');

            $delete = $this->handler->delete($id, $table);
            if ($delete) {
                $response = array(
                    'status' => true,
                    'message' => 'Item deleted successfully!'
                );
            }
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($response));
    }

    public function password_check($str) {
        $con = array(
            'returnType' => 'count',
            'conditions' => array(
                'id' => $this->user_id,
                'password' => md5($str)
            )
        );

        $check = $this->handler->getRows($con, 'users');
        if ($check <= 0) {
            $this->form_validation->set_message('password_check', 'Password Doesn\'t match');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function logout() {
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();

        redirect('admin/login', 'refresh');
    }

    public function clearUser() {
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('user_id');
        $this->session->sess_destroy();
    }
}
