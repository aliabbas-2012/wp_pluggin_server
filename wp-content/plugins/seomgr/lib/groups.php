<?php

class Seomgr_groups {

    function __construct() {
        
    }

    public static function getInstance() {
        $class = new Seomgr_groups();
        return $class;
    }

    public function form_callback() {
        $data = array();
        if (isset($_POST['data_id'])) {
            $data = Seomgr_group_model::getInstance()->get(array('id' => $_POST['data_id']));
            if(!empty($data)){
                $data['result'] = array_pop($data);
            }
        }
        Seomgr_general::getInstance()->render_view('forms/group', $data);
        wp_die();
    }

    public function load_page() {
        $data = array('image' => 'Selection_008');


        $data = array('image' => 'Selection_007');
        Seomgr_general::getInstance()->render_view('groups', $data, false, 'layout');
    }
    
    
    public function delete_callback() {
        $data = array();
        if (isset($_POST['data_id'])) {
            $data = Seomgr_group_model::getInstance()->delete(array('id' => $_POST['data_id']));
        }
        Seomgr_general::getInstance()->show_json_msg('Group has successfully deleted.', false);
        wp_die();
    }

}
