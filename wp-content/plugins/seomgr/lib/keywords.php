<?php

class Seomgr_keywords{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_keywords();
        return $class;
    }
    
    public function load_page(){
        $data = array('image' => 'Selection_008');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
        
        $data = array('image' => 'Selection_007');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
        
    }
    
}