<?php

class Seomgr_admin {

    public function __construct() {
        session_start();
        $this->load_actions();
        $this->load_filters();
        $this->load_shortcodes();
        //$this->load_stylesheet();
        //$this->load_javascript();
        $this->save_data();
    }

    public function load_actions() {
        add_action('admin_menu', array($this, 'load_menu'));
        add_action('admin_notices', array('Seomgr_general', 'seomgr_admin_notices'));
        add_action('admin_init', array($this, 'load_init_actions'));

        add_action('wp_ajax_site', array('Seomgr_sites', 'form_callback'));
        add_action('wp_ajax_keyword', array('Seomgr_keywords', 'form_callback'));
        add_action('wp_ajax_group', array('Seomgr_groups', 'form_callback'));

        add_action('wp_ajax_delete_site', array('Seomgr_sites', 'delete_callback'));
        add_action('wp_ajax_delete_keyword', array('Seomgr_keywords', 'delete_callback'));
        add_action('wp_ajax_delete_group', array('Seomgr_groups', 'delete_callback'));
    }

    public function load_init_actions() {
        //unset($_SESSION['seomgr_notice']);
        $this->load_stylesheet();
        $this->load_javascript();
    }

    public function load_filters() {
        
    }

    public function load_shortcodes() {
        
    }

    public function load_stylesheet() {
        wp_enqueue_style('jquery_ui', SEOMGR_ASSETS_URL . 'styles/jquery-ui-1.10.4.custom.min.css');
//        wp_enqueue_style('font_awesome', SEOMGR_ASSETS_URL . 'styles/font-awesome.min.css');
//        wp_enqueue_style('bootstrap', SEOMGR_ASSETS_URL . 'styles/bootstrap.min.css');
//        wp_enqueue_style('animate', SEOMGR_ASSETS_URL . 'styles/animate.css');
//        wp_enqueue_style('seomgr_all', SEOMGR_ASSETS_URL . 'styles/all.css');
//        wp_enqueue_style('seomgr_all', SEOMGR_ASSETS_URL . 'styles/main.css');
//        wp_enqueue_style('seomgr_resp', SEOMGR_ASSETS_URL . 'styles/style-responsive.css');
//        wp_enqueue_style('seomgr_calendar', SEOMGR_ASSETS_URL . 'styles/zabuto_calendar.min.css');
//        wp_enqueue_style('pace', SEOMGR_ASSETS_URL . 'styles/pace.css');
//        wp_enqueue_style('ticker', SEOMGR_ASSETS_URL . 'styles/jquery.news-ticker.css');
    }

    public function load_javascript() {
        //wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
//        wp_enqueue_script('jquery', SEOMGR_ASSETS_URL . 'script/jquery-1.10.2.min.js', array(), '1.0.0', true);
        wp_enqueue_script('jquery-migrate', SEOMGR_ASSETS_URL . 'script/seomgr_func.js', array(), '1.0.0', true);
//        wp_enqueue_script('jquery-migrate', SEOMGR_ASSETS_URL . 'script/jquery-migrate-1.2.1.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('jquery-ui', SEOMGR_ASSETS_URL . 'script/jquery-ui.js', array(), '1.0.0', true);
//        wp_enqueue_script('bootstrap', SEOMGR_ASSETS_URL . 'script/bootstrap.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('bootstrap-hover-dropdown', SEOMGR_ASSETS_URL . 'script/bootstrap-hover-dropdown.js', array(), '1.0.0', true);
//        wp_enqueue_script('html5shiv', SEOMGR_ASSETS_URL . 'script/html5shiv.js', array(), '1.0.0', true);
//        wp_enqueue_script('respond', SEOMGR_ASSETS_URL . 'script/respond.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('metisMenu', SEOMGR_ASSETS_URL . 'script/jquery.metisMenu.js', array(), '1.0.0', true);
//        wp_enqueue_script('slimscroll', SEOMGR_ASSETS_URL . 'script/jquery.slimscroll.js', array(), '1.0.0', true);
//        wp_enqueue_script('cookie', SEOMGR_ASSETS_URL . 'script/jquery.cookie.js', array(), '1.0.0', true);
//        wp_enqueue_script('icheck', SEOMGR_ASSETS_URL . 'script/icheck.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('seomgr_custommin', SEOMGR_ASSETS_URL . 'script/custom.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('news-ticker', SEOMGR_ASSETS_URL . 'script/jquery.news-ticker.js', array(), '1.0.0', true);
//        wp_enqueue_script('jquery_menu', SEOMGR_ASSETS_URL . 'script/jquery.menu.js', array(), '1.0.0', true);
//        wp_enqueue_script('pace', SEOMGR_ASSETS_URL . 'script/pace.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('holder', SEOMGR_ASSETS_URL . 'script/holder.js', array(), '1.0.0', true);
//        wp_enqueue_script('responsive-tabs', SEOMGR_ASSETS_URL . 'script/responsive-tabs.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot', SEOMGR_ASSETS_URL . 'script/jquery.flot.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_categories', SEOMGR_ASSETS_URL . 'script/jquery.flot.categories.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_pie', SEOMGR_ASSETS_URL . 'script/jquery.flot.pie.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_tooltip', SEOMGR_ASSETS_URL . 'script/jquery.flot.tooltip.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_resize', SEOMGR_ASSETS_URL . 'script/jquery.flot.resize.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_fillbetween', SEOMGR_ASSETS_URL . 'script/jquery.flot.fillbetween.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_stack', SEOMGR_ASSETS_URL . 'script/jquery.flot.stack.js', array(), '1.0.0', true);
//        wp_enqueue_script('flot_spline', SEOMGR_ASSETS_URL . 'script/jquery.flot.spline.js', array(), '1.0.0', true);
//        wp_enqueue_script('zabuta_calendar', SEOMGR_ASSETS_URL . 'script/zabuto_calendar.min.js', array(), '1.0.0', true);
//        wp_enqueue_script('seomgr_index', SEOMGR_ASSETS_URL . 'script/index.js', array(), '1.0.0', true);
//
//        wp_enqueue_script('highcharts', SEOMGR_ASSETS_URL . 'script/highcharts.js', array(), '1.0.0', true);
//        wp_enqueue_script('highcharts_data', SEOMGR_ASSETS_URL . 'script/data.js', array(), '1.0.0', true);
//        wp_enqueue_script('drilldown', SEOMGR_ASSETS_URL . 'script/drilldown.js', array(), '1.0.0', true);
//        wp_enqueue_script('exporting', SEOMGR_ASSETS_URL . 'script/exporting.js', array(), '1.0.0', true);
//        wp_enqueue_script('highcharts_more', SEOMGR_ASSETS_URL . 'script/highcharts-more.js', array(), '1.0.0', true);
//        wp_enqueue_script('highcharts_pie', SEOMGR_ASSETS_URL . 'script/charts-highchart-pie.js', array(), '1.0.0', true);
//        wp_enqueue_script('highcharts_cahrts_more', SEOMGR_ASSETS_URL . 'script/charts-highchart-more.js', array(), '1.0.0', true);
//
//        wp_enqueue_script('seomgr_main', SEOMGR_ASSETS_URL . 'script/main.js', array(), '1.0.0', true);
    }

    public function save_data() {
        if (isset($_POST['site'])) {
            Seomgr_site_model::getInstance()->save($_POST['site']);
            Seomgr_general::getInstance()->show_json_msg('Site has successfully saved.');
        }
        if (isset($_POST['group'])) {
            Seomgr_group_model::getInstance()->save($_POST['group']);
            Seomgr_general::getInstance()->show_json_msg('Group has successfully saved.');
        }
        if (isset($_POST['keyword'])) {
            Seomgr_keyword_model::getInstance()->save($_POST['keyword']);
            Seomgr_general::getInstance()->show_json_msg('Keyword has successfully saved.');
        }
    }

    public function load_menu() {
        $title = apply_filters('metaslider_menu_title', "SEO Manager");

        add_menu_page($title, $title, 'manage_options', 'seomgr', array($this, 'render_admin_dashboard'), SEOMGR_ASSETS_URL . 'images/matchalabs.png', 6);
        add_submenu_page('seomgr', 'Sites', 'Sites', 'manage_options', 'seomgr_sites', array($this, 'render_admin_sites'));
        add_submenu_page('seomgr', 'Groups', 'Groups', 'manage_options', 'seomgr_groups', array($this, 'render_admin_groups'));
        add_submenu_page('seomgr', 'Keywords', 'Keywords', 'manage_options', 'seomgr_keywords', array($this, 'render_admin_keywords'));
        add_submenu_page('seomgr', 'Range Option', 'Range Option', 'manage_options', 'seomgr_range', array($this, 'render_admin_range'));
        add_submenu_page('seomgr', 'Timeline Option', 'Timeline Option', 'manage_options', 'seomgr_timeline', array($this, 'render_admin_timeline'));
        add_submenu_page('seomgr', 'Compare to', 'Compare to', 'manage_options', 'seomgr_compare', array($this, 'render_admin_compare'));
        add_submenu_page('seomgr', 'SERP', 'SERP', 'manage_options', 'seomgr_serp', array($this, 'render_admin_serp'));
        add_submenu_page('seomgr', 'PBN', 'PBN', 'manage_options', 'seomgr_pbn', array($this, 'render_admin_pbn'));
        add_submenu_page('seomgr', 'Backlinks', 'Backlinks', 'manage_options', 'seomgr_backlinks', array($this, 'render_admin_backlinks'));
    }

    public function render_admin_dashboard() {

        seomgr_load_file('lib/dashboard.php');
        Seomgr_dashboard::getInstance()->load_page();
    }

    public function render_admin_sites() {
        Seomgr_sites::getInstance()->load_page();
    }

    public function render_admin_groups() {
        Seomgr_groups::getInstance()->load_page();
    }

    public function render_admin_keywords() {
        Seomgr_keywords::getInstance()->load_page();
    }

    public function render_admin_range() {
        seomgr_load_file('lib/range.php');
        Seomgr_range::getInstance()->load_page();
    }

    public function render_admin_timeline() {
        seomgr_load_file('lib/timeline.php');
        Seomgr_timeline::getInstance()->load_page();
    }

    public function render_admin_compare() {
        seomgr_load_file('lib/compare.php');
        Seomgr_compare::getInstance()->load_page();
    }

    public function render_admin_serp() {
        seomgr_load_file('lib/serp.php');
        Seomgr_serp::getInstance()->load_page();
    }

    public function render_admin_pbn() {
        seomgr_load_file('lib/pbn.php');
        Seomgr_pbn::getInstance()->load_page();
    }

    public function render_admin_backlinks() {

        seomgr_load_file('lib/backlinks.php');

        Seomgr_backlinks::getInstance()->load_page();
    }

}
