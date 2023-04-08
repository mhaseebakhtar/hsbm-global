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

    public function getSetting($type, $name) {
        $this->db->where('type', $type);
        $this->db->where('name', $name);

        $query = $this->db->get('settings');

        $result = $query->row_array();
        $num_rows = $query->num_rows();

        return $num_rows ? $result['value'] : false;
    }
}