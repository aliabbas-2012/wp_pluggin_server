<?php

class Seomgr_keywords {

    function __construct() {
        
    }

    public static function getInstance() {
        $class = new Seomgr_keywords();
        return $class;
    }
    
    public function form_callback() {
        $data = array();
        if (isset($_POST['data_id'])) {
            $data = Seomgr_keyword_model::getInstance()->get(array('keyword.id' => $_POST['data_id']));
            if(!empty($data)){
                $data['result'] = array_pop($data);
            }
        }
        Seomgr_general::getInstance()->render_view('forms/keyword', $data);
        wp_die();
    }


    public function load_page() {
        $data = array('image' => 'Selection_008');


        $data = array('image' => 'Selection_007');
        Seomgr_general::getInstance()->render_view('keywords', $data, false, 'layout');
    }

    public function delete_callback() {
        $data = array();
        if (isset($_POST['data_id'])) {
            $data = Seomgr_keyword_model::getInstance()->delete(array('id' => $_POST['data_id']));
        }
        Seomgr_general::getInstance()->show_json_msg('Keyword has successfully deleted.', false);
        wp_die();
    }
}
