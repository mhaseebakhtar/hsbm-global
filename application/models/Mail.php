<?php defined('BASEPATH') or exit('No direct script access allowed');

class Mail extends CI_Model {
    public function sendMail($recipient, $params, $template, $receive = false) {
        if (empty($params) || !$template) {
            return false;
        }

        $bodyTemplate = $template->body;

        // Do replacements
        foreach ($params as $var => $val) {
            $raw = trim($var, '[]');
            $var = '[' . $var . ']';

            $val = str_replace('&amp;nbsp;', ' ', $val);
            $val = str_replace('&nbsp;', ' ', $val);

            $bodyTemplate = str_replace($var, $val, $bodyTemplate);
        }

        $settings = $this->getSettings('mail');

        if ($receive) {
            $title = $params['sender_name'];
            $from = (is_object($recipient)) ? $recipient->email : $recipient;
            $email = $settings['reciever_email'];
        } else {
            $title = $settings['sender_title'];
            $from = $settings['sender_email'];
            $email = (is_object($recipient)) ? $recipient->email : $recipient;
        }

        $subject = $template->subject;
        if (isset($params['subject'])) {
            $subject = $subject . $params['subject'];
        }

        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = true;
        $this->email->set_newline("\r\n");

        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        $this->email->from($from, $title);
        $this->email->to($email);

        $this->email->subject($subject);
        $this->email->message($bodyTemplate);

        if ($this->email->send(FALSE)) {
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

    public function sendOtherMail($recipient, $params = array()) {
        if (empty($params)) {
            return false;
        }

        $settings = $this->getSettings('mail');

        $title = (isset($params['name'])) ? $params['name'] : $settings['sender_title'];
        $from = (isset($params['email'])) ? $params['email'] : $settings['sender_email'];
        $email = (is_array($recipient)) ? $recipient['email'] : $recipient;

        $subject = $params['subject'];

        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = true;
        $this->email->set_newline("\r\n");

        $config['crlf'] = "\r\n";
        $config['newline'] = "\r\n";

        $this->email->initialize($config);

        $this->email->from($from, $title);
        $this->email->to($email);

        $this->email->subject($subject);
        $this->email->message($params['body']);

        if ($this->email->send(FALSE)) {
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

    public function getSettings($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('settings');

        $result = $query->result();
        $num_rows = $query->num_rows();

        $settings = false;
        if ($num_rows) {
            foreach ($result as $setting) {
                $settings[$setting->name] = $setting->value;
            }
        }

        return $settings;
    }
}