<?php

class Seomgr_activation {

    public static function getInstance() {
        $class = new Seomgr_activation();
        return $class;
    }

    public function activation() {
        $this->add_tables();
    }

    private function add_tables() {
        global $wpdb, $seomgr_id;

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

        $tables_prefix = $wpdb->prefix . $seomgr_id;

        $sql = '';

        $sql .= "CREATE TABLE IF NOT EXISTS `" . $tables_prefix . "sites` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY id (id)
);
";

        dbDelta($sql);
        $sql .= "CREATE TABLE IF NOT EXISTS `" . $tables_prefix . "group` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY id (id)
);
";

        dbDelta($sql);
        $sql .= "CREATE TABLE IF NOT EXISTS `" . $tables_prefix . "keywords` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `site_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY id (id),
  INDEX site_id (site_id),
  INDEX group_id (group_id)
);";
        dbDelta($sql);
    }

    public function deactivation() {
        
    }

}
