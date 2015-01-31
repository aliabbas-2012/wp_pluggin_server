<?php 

echo time('now') + 60*60;

//wp-load
require_once('../../../wp-load.php');

update_option('whatsmysert_disabled_till',time('now') + 60*60 );

exit;
 
$wp_rankie_whatsmyserp_proxy_max_day = get_option ('wp_rankie_whatsmyserp_proxy_day' , 'x');

echo $wp_rankie_whatsmyserp_proxy_max_day;
?>


