<?php

class Seomgr_dashboard {

    function __construct() {
        
    }

    public static function getInstance() {
        $class = new Seomgr_dashboard();
        return $class;
    }

    public function load_page() {  
        $data = array('image' => 'Selection_011');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
        
        $data = array('image' => 'Selection_010');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
        
        $data = array('image' => 'Selection_009');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }

}
