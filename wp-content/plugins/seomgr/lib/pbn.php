<?php

class Seomgr_pbn{
    
    function __construct() {
        
    }

    public static function getInstance(){
        $class = new Seomgr_pbn();
        return $class;
    }
    
    public function load_page(){
        $data = array('image' => 'Selection_002');
        Seomgr_general::getInstance()->render_view('backlinks', $data);
    }
    
}