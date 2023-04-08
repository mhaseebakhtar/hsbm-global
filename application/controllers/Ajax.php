<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct() {
        parent::__construct();

        if (!$this->input->is_ajax_request()) {
            show_404();
        }
	}

    public function contact() {
        $response = array('status' => false, 'message' => 'Something went wrong, please try again later!');

		if ($this->input->post('submit')) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$params = array(
                'name' => $name,
                'email' => $email,
                'subject' => $subject,
                'body' => $message,
            );

            $mailSettings = $this->handler->getSettings('mail');

            $mail = $this->mail->sendOtherMail($mailSettings['receiver_email'], $params);
            if ($mail) {
                $response = array('status' => true, 'message' => 'Your message was sent, we will get back to you soon!');
            }
		}

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function subscribe() {
        $response = array('status' => false, 'message' => 'Something went wrong, please try again later!');

		if ($this->input->post('submit')) {
			$email = $this->input->post('email');

            $subscriber = $this->handler->getRecordByCol('email', $email, 'subscribers');
            if (!$subscriber) {
                $action = $this->handler->insert(array('email' => $email), 'subscribers');
                if ($action) {
                    $response = array('status' => true, 'message' => 'Thank you for subscribing!');
                }
            } else {
                $response['message'] = 'You are already subscribed!';
            }
		}

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }

    public function category($type) {
        $response = array('status' => false);

        if ($type == 'new') {
            $name = $this->input->post('category');
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

            $params = array(
                'name' => $name,
                'slug' => $slug,
                'status' => $this->input->post('status')
            );

            $action = $this->handler->insert($params, 'blog_categories');
            if ($action) {
                $response = array(
                    'status' => true,
                    'message' => 'New Category added successfully!'
                );
            }
        } else if ($type == 'get') {
            $category_id = $this->input->post('category_id');

            $category = $this->handler->getRecord($category_id, 'blog_categories');

            $response = array(
                'status' => true,
                'category' => $category
            );
        } else if ($type == 'edit') {
            $id = $this->input->post('id');
            $status = $this->input->post('status');

            $name = $this->input->post('category');
            $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

            $params = array(
                'id' => $id,
                'name' => $name,
                'slug' => $slug,
                'status' => $status
            );

            $action = $this->handler->update($params, 'blog_categories');
            if ($action) {
                // $this->handler->updateByCol(array('status' => $status), array('category' => $id), 'blogs');

                $response = array(
                    'status' => true,
                    'message' => 'Category updated successfully!'
                );
            }
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}
