<?php

class Seomgr_keyword_model {

    var $table = 'keywords';
    var $wpdb;

    function __construct() {
        global $wpdb, $seomgr_id;
        $this->wpdb = $wpdb;
        $this->table = $wpdb->prefix . $seomgr_id . $this->table;
    }

    public static function getInstance() {
        $class = new Seomgr_keyword_model();
        return $class;
    }

    public function save($data = array()) {
        if (!empty($data)) {
            unset($data['submit']); 
            if (isset($data['id']) && $data['id'] != '') {
                $this->update($this->table, $data, array('id' => $data['id']));
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

        $sql = "SELECT keyword.*, site.title as site_title, groups.title as group_title "
                . " FROM " . $this->table . " keyword"
                . " LEFT JOIN " . Seomgr_site_model::getInstance()->table . " site ON site.id=keyword.site_id "
                . " LEFT JOIN " . Seomgr_group_model::getInstance()->table . " groups ON groups.id=keyword.group_id ";

        if (!empty($where)) {
            $i = 0;
            $sql .= " WHERE ";
            foreach ($where as $key => $val) {
                if ($i > 0) {
                    $sql .= " AND ";
                }
                $sql .= (" " . $key . "=" . $val . " ");
                $i++;
            }
        }
        
        return $this->wpdb->get_results($sql);
    }

}
