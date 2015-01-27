<?php

class Seomgr_compare{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_compare();
        return $class;
    }
    
    public function load_page(){
      
        $data = array('image' => 'Selection_004');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }
    
}