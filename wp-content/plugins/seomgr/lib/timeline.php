<?php

class Seomgr_timeline{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_timeline();
        return $class;
    }
    
    public function load_page(){
        $data = array('image' => 'Selection_005');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }
    
}