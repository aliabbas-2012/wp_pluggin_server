<?php

class Seomgr_admin {

    public function __construct() {
        $this->load_actions();
        $this->load_filters();
        $this->load_shortcodes();
        $this->load_stylesheet();
        $this->load_javascript();
        //$this->load_pages();
    }

    public function load_actions() {
        add_action('admin_menu', array($this, 'load_menu'));
    }

    public function load_filters() {
        
    }

    public function load_shortcodes() {
        
    }

    public function load_stylesheet() {
        
    }

    public function load_javascript() {
        
    }

    public function load_menu() {
        $title = apply_filters('metaslider_menu_title', "SEO Manager");

        add_menu_page($title, $title, 'manage_options', 'seomgr', array($this, 'render_admin_dashboard'), SEOMGR_ASSETS_URL . 'images/matchalabs.png', 6);
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
    
    public function render_admin_keywords() {
        seomgr_load_file('lib/keywords.php');
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
