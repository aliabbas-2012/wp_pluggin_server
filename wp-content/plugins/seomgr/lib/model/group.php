<?php

class Seomgr_group_model {

    var $table = 'group';
    var $wpdb;

    function __construct() {
        global $wpdb, $seomgr_id;
        $this->wpdb = $wpdb;

        $this->table = $wpdb->prefix . $seomgr_id . $this->table;
    }

    public static function getInstance() {
        $class = new Seomgr_group_model();
        return $class;
    }

    public function validation($data = array()) {
        $error = '';
        if (isset($data['title']) && $data['title'] != '') {
            $res = $this->get(array('title' => $data['title']));
            if (count($res) > 0) {
                $error .= 'Group name Already exist.<br/>';
            }
        } else {
            $error .= 'Please enter the valid group name.<br/>';
        }
        if ($error != '') {
            return $error;
        }
        return true;
    }

    public function save($data = array()) {

        if (!empty($data)) {

            unset($data['submit']);
            if (isset($data['id']) && $data['id'] != '') {
                $this->update($data, array('id' => $data['id']));
            } else {
                $data['created_at'] = date('Y-m-d H:i:s');

                $this->wpdb->insert($this->table, $data);
            }
        }
        return false;
    }

    public function update($data = array(), $where = array()) {
        if (!empty($data) && !empty($where)) {
            $this->wpdb->update($this->table, $data, $where);
        }
        return false;
    }

    public function delete($where = array()) {
        if (isset($where['id']) && !empty($where['id'])) {
            $this->wpdb->delete($this->table, array('id' => $where['id']));
        }
        return false;
    }

    public function get($where = array()) {

        $sql = "SELECT * FROM " . $this->table;
        if (!empty($where)) {
            $i = 0;
            $sql .= " WHERE ";
            foreach ($where as $key => $val) {
                if ($i > 0) {
                    $sql .= " AND ";
                }
                $sql .= (" " . $key . "='" . $val . "' ");
                $i++;
            }
        }

        return $this->wpdb->get_results($sql);
    }

}
