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
    public function render_view($path = '', $data = array(), $get_content = false, $layout = 'blank') {
        /* $view_path = SEOMGR_VIEWS_DIR . $path . '.php';
          if (file_exists($view_path)) {
          extract($data);
          //$content = file_get_contents($view_path,true);
          require_once(SEOMGR_VIEWS_DIR . "layout.php");
          } else {
          echo "File: " . $view_path . " not found.";
          } */
//        $license = $this->validateLicencse();
        if (isset($license['status']) && $license['status'] == 0) {
            echo $license['message'];
            echo "<br/>";
            if (!empty($license['content'])) {
                echo $license['content'];
            }
        } else {

            $layout = 'layouts/' . $layout;
            $view_path = SEOMGR_VIEWS_DIR . $path . '.php';
            if (file_exists($view_path)) {

                if (!empty($data)) {
                    extract($data);
                }
                //with path
                if (!strstr($_SERVER["REQUEST_URI"], "ajax")) {
                    require(SEOMGR_VIEWS_DIR . $layout . '.php');
                } else {
                    //ajax mode
                    require_once($view_path);
                }
            } else {
                echo "File: " . $view_path . " not found.";
            }
        }
    }

    /*
     * rendering data
     */

    public function renderPartial($path) {

        $view_path = SEOMGR_VIEWS_DIR . $path . '.php';
        if (file_exists($view_path)) {



            if (!empty($data)) {
                extract($data);
            }

            require_once($view_path);
        } else {
            echo "File: " . $view_path . " not found.";
        }
    }

    public function activation() {
        seomgr_load_file('lib/activation.php');
        Seomgr_activation::getInstance()->activation();
    }

    public function deactivation() {
        seomgr_load_file('lib/activation.php');
        Seomgr_activation::getInstance()->deactivation();
    }

    public function date_format($date = '') {
        $format = get_option('date_format');
        if (!empty($date)) {
            return date($format, strtotime($date));
        }
        return false;
    }

    public function get_site_dropdown($select = '', $name = 'keyword[site_id]') {
        $results = Seomgr_site_model::getInstance()->get();
        $html = '<select name="' . $name . '" id="' . $name . '" >';

        if (!empty($results)) {
            $html .= '<option value="">Choose Site</option>';
            foreach ($results as $row) {
                $select_str = '';
                if ($select == $row->id) {
                    $select_str = ' selected="selected" ';
                }
                $html .= '<option value="' . $row->id . '" ' . $select_str . '>' . $row->title . '</option>';
            }
        }
        $html .= '</select>';
        return $html;
    }

    public function get_group_dropdown($select = '', $name = 'keyword[group_id]') {
        $results = Seomgr_group_model::getInstance()->get();
        $html = '<select name="' . $name . '" id="' . $name . '" >';
        if (!empty($results)) {
            $html .= '<option value="">Choose Group</option>';
            foreach ($results as $row) {
                $select_str = '';
                if ($select == $row->id) {
                    $select_str = ' selected="selected" ';
                }
                $html .= '<option value="' . $row->id . '" ' . $select_str . '>' . $row->title . '</option>';
            }
        }
        $html .= '</select>';
        return $html;
    }

    public function seomgr_admin_notices() {
        global $pagenow;
        if (!isset($_SESSION['seomgr_notice'])) {
            return false;
        }

        $error = '';
        $error .= '<div class="' . $_SESSION['seomgr_notice']['type'] . '"><p>';
        $error .= $_SESSION['seomgr_notice']['message'];
        $error .= '</p></div>';
        echo $error;
        unset($_SESSION['seomgr_notice']);
    }

    public function set_notice($message = '', $type = 'success') {
        $_SESSION['seomgr_notice']['message'] = $message;
        $_SESSION['seomgr_notice']['type'] = ($type == 'success' ? 'updated' : $type);
    }

    public function show_json_msg($msg, $error = false) {
        $arr = array();
        if ($error) {
            $arr = array(
                'status' => 'error',
                'msg' => $msg
            );
        } else {
            $arr = array(
                'status' => 'success',
                'msg' => $msg
            );
        }
        echo json_encode($arr);
        exit();
    }

    public function get_value($result, $key) {
        if (isset($result->$key)) {
            return $result->$key;
        }
        return false;
    }

    public function is_valid_domain($domain) {

        if (!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
            return false;
        }
        return true;
    }

}
