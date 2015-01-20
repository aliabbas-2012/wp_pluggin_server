<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Seomgr_site_model {

    var $table = 'sites';
    var $wpdb = 'sites';

    function __construct() {
        global $wpdb, $seomgr_id;
        $this->wpdb = $wpdb;
        $this->table = $wpdb->prefix . $seomgr_id . $this->table;
    }

    public static function getInstance() {
        $class = new Seomgr_site_model();
        return $class;
    }

    public function insert($data = array()) {
        if (!empty($data)) { 
            seomgr_debug($this->table);
            seomgr_debug($data, true);
            $this->wpdb->insert($this->table, $data);
        }
        return false;
    }

    public function update($data = array(), $where = array()) {
        if (!empty($data) && !empty($where)) {
            
        }
        return false;
    }

    public function delete($where = array()) {
        if (!empty($where)) {
            
        }
        return false;
    }

    public function get($where = array()) {
        
    }

}
