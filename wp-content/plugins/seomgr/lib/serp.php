<?php

class Seomgr_serp{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_serp();
        return $class;
    }
    
    public function load_page(){
        $data = array('image' => 'Selection_003');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }
    
}