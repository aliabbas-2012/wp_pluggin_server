<?php

class Seomgr_general {

    function __construct() {
        
    }

    public static function getInstance() {
        $class = new Seomgr_general();
        return $class;
    }

    /**
     * 
     * @param type $path (dir/filename with out php extension)
     */
    public function render_view($path = '', $data = array()) {
        $view_path = SEOMGR_VIEWS_DIR . $path . '.php';
        if (file_exists($view_path)) {
            extract($data);
            require($view_path);
        } else {
            echo "File: " . $view_path . " not found.";
        }
    }

}
