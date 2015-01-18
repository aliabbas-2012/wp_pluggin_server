<?php

class Seomgr_backlinks{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_backlinks();
        return $class;
    }
    
    public function load_page(){
        $data = array('image' => 'Selection_001');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }
    
}