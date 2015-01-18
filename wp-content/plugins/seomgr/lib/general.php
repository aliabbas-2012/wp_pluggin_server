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
        $license = $this->validateLicencse();
        if (isset($license['status']) && $license['status'] == 0) {
            echo $license['message'];
            echo "<br/>";
            if (!empty($license['content'])) {
                echo $license['content'];
            }
        } else {
            $view_path = SEOMGR_VIEWS_DIR . $path . '.php';
            if (file_exists($view_path)) {
                extract($data);
                require($view_path);
            } else {
                echo "File: " . $view_path . " not found.";
            }
        }
    }

    /**
     * Validate pluggin License
     */
    public function validateLicencse() {
        $ch = curl_init();
        $url = "http://localhost/fakhar/plugginserverone/index.php/api-index";
        if (strstr($_SERVER['HTTP_HOST'], "seologica.net")) {
            $url = "http://seologica.net/index.php/api-index";
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "pluggin_name=wp 1&host_name=" . $_SERVER['HTTP_HOST']);

        // in real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        //          http_build_query(array('postvar1' => 'value1')));
        // receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close($ch);
        $server_output;
        // further processing ....

        return json_decode($server_output, true);
//        if ($server_output == "OK") {
//            return json_decode($server_output, true);
//        } else {
//            return array("error" => true) + json_decode($server_output, true);
//        }
    }

}
