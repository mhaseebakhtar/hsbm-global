<?php defined('BASEPATH') or exit('No direct script access allowed');

class Handler extends CI_Model {
    public function getRows($params, $table) {
        $this->db->select('*');
        $this->db->from($table);

        if (array_key_exists("conditions", $params)) {
            foreach ($params['conditions'] as $key => $val) {
                $this->db->where($key, $val);
            }
        }

        if (array_key_exists("returnType", $params) && $params['returnType'] == 'count') {
            $result = $this->db->count_all_results();
        } else {
            if (array_key_exists("id", $params) || isset($params['returnType']) && $params['returnType'] == 'single') {
                if (!empty($params['id'])) {
                    $this->db->where('id', $params['id']);
                }

                $query = $this->db->get();
                $result = $query->row();
            } else if (array_key_exists("username", $params)) {
                if (!empty($params['username'])) {
                    $this->db->where('username', $params['username']);
                }

                $query = $this->db->get();
                $result = $query->row();
            } else if (array_key_exists("email", $params)) {
                if (!empty($params['email'])) {
                    $this->db->where('email', $params['email']);
                }

                $query = $this->db->get();
                $result = $query->row();
            } else {
                $order = 'id';
                if (array_key_exists("order", $params)) {
                    $order = $params['order'];
                }

                $direction = 'desc';
                if (array_key_exists("direction", $params)) {
                    $direction = $params['direction'];
                }

                $this->db->order_by($order, $direction);
                if (array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit'], $params['start']);
                } elseif (!array_key_exists("start", $params) && array_key_exists("limit", $params)) {
                    $this->db->limit($params['limit']);
                }

                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result() : FALSE;
            }
        }

        // Return fetched data
        return $result;
    }

    public function insert($data, $table) {
        if (!empty($data)) {
            // Add created and modified date if not included
            if (!array_key_exists("created_at", $data)) {
                $data['created_at'] = date("Y-m-d H:i:s");
            }

            $insert = $this->db->insert($table, $data);
            return $insert ? $this->db->insert_id() : false;
        }

        return false;
    }

    public function update($data, $table) {
        if (!empty($data)) {
            // Add modified date if not included
            if (!array_key_exists("updated_at", $data)) {
                $data['updated_at'] = date("Y-m-d H:i:s");
            }

            $this->db->where('id', $data['id']);

            $update = $this->db->update($table, $data);
            return $update ? true : false;
        }

        return false;
    }

    public function updateByCol($data, $cols, $table) {
        if (!empty($data)) {
            // Add modified date if not included
            if (!array_key_exists("updated_at", $data)) {
                $data['updated_at'] = date("Y-m-d H:i:s");
            }

            foreach ($cols as $col => $val) {
                $this->db->where($col, $val);
            }

            $update = $this->db->update($table, $data);
            return $update ? true : false;
        }

        return false;
    }

    public function delete($id, $table) {
        $delete = $this->db->delete($table, array('id' => $id));
        return $delete ? true : false;
    }

    public function getRecord($id, $table) {
        $this->db->where('id', $id);

        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        $row = $query->row();

        return $num_rows ? $row : false;
    }

    public function getRecordByCol($col, $val, $table) {
        $this->db->where($col, $val);

        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        $row = $query->row();

        return $num_rows ? $row : false;
    }

    public function getRecordsByCol($col, $val, $table) {
        $this->db->where($col, $val);

        $query = $this->db->get($table);
        $num_rows = $query->num_rows();
        $result = $query->result();

        return $num_rows ? $result : false;
    }

    public function getSettings($type, $name = false) {
        $this->db->where('type', $type);

        if ($name) {
            $this->db->where('name', $name);
        }

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

    public function setSettings($data = array(), $type) {
        if (!empty($data)) {
            foreach ($data as $name => $value) {
                $arr = array(
                    'type' => $type,
                    'name' => $name,
                    'value' => $value,
                );

                $sql = $this->db->insert_string('settings', $arr) . " ON DUPLICATE KEY UPDATE name = '$name', value = '$value'";
                $insert = $this->db->query($sql);
            }

            return $insert ? true : false;
        }

        return false;
    }

    public function getSetting($type, $name) {
        $this->db->where('type', $type);
        $this->db->where('name', $name);

        $query = $this->db->get('settings');

        $result = $query->row_array();
        $num_rows = $query->num_rows();

        return $num_rows ? $result['value'] : false;
    }

    public function getTotalCount($table) {
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();

        return ($num_rows) ? $num_rows : false;
    }

    public function get($limit, $start, $table, $order = false) {
        if ($order) {
            $this->db->order_by($order);
        }

        $this->db->limit($limit, $start);
        $query = $this->db->get($table);

        $result = $query->result();
        $num_rows = $query->num_rows();

        return ($num_rows) ? $result : false;
    }

    public function customPagination($base_url, $total, $limit) {
        $config['base_url'] = $base_url;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config["uri_segment"] = 3;

        $config['num_links'] = 3;
        $config['use_page_numbers'] = true;
        $config['reuse_query_string'] = true;

        $config['full_tag_open'] = '<div class="pagination">';
        $config['full_tag_close'] = '</div>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<span class="firstlink">';
        $config['first_tag_close'] = '</span>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<span class="lastlink">';
        $config['last_tag_close'] = '</span>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<span class="nextlink">';
        $config['next_tag_close'] = '</span>';

        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<span class="prevlink">';
        $config['prev_tag_close'] = '</span>';

        $config['cur_tag_open'] = '<span class="curlink">';
        $config['cur_tag_close'] = '</span>';

        $config['num_tag_open'] = '<span class="numlink text-white">';
        $config['num_tag_close'] = '</span>';

        return $config;
    }
}