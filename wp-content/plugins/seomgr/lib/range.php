<?php

class Seomgr_range{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_range();
        return $class;
    }
    
    public function load_page(){
        $data = array('image' => 'Selection_006');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }
    
}