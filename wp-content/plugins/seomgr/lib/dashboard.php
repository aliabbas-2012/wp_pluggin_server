<?php

class Seomgr_dashboard {

    function __construct() {
        
    }

    public static function getInstance() {
        $class = new Seomgr_dashboard();
        return $class;
    }

    public function load_page() {
        if(isset($_POST['site']['submit'])){
            Seomgr_site_model::getInstance()->insert($_POST['site']);
        }
        $data = array('image' => 'Selection_011');
        Seomgr_general::getInstance()->render_view('backlinks', $data, false, 'layout');
    }

}
