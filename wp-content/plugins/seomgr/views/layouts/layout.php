
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/jquery-ui-1.10.4.custom.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/animate.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/all.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/main.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/style-responsive.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/zabuto_calendar.min.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/pace.css">
<link type="text/css" rel="stylesheet" href="<?php echo SEOMGR_ASSETS_URL ?>styles/jquery.news-ticker.css">


<div>

    <!--BEGIN MODAL CONFIG PORTLET-->
    <div id="modal-config" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">
                        &times;</button>
                    <h4 class="modal-title">
                        Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend et nisl eget
                        porta. Curabitur elementum sem molestie nisl varius, eget tempus odio molestie.
                        Nunc vehicula sem arcu, eu pulvinar neque cursus ac. Aliquam ultricies lobortis
                        magna et aliquam. Vestibulum egestas eu urna sed ultricies. Nullam pulvinar dolor
                        vitae quam dictum condimentum. Integer a sodales elit, eu pulvinar leo. Nunc nec
                        aliquam nisi, a mollis neque. Ut vel felis quis tellus hendrerit placerat. Vivamus
                        vel nisl non magna feugiat dignissim sed ut nibh. Nulla elementum, est a pretium
                        hendrerit, arcu risus luctus augue, mattis aliquet orci ligula eget massa. Sed ut
                        ultricies felis.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">
                        Close</button>
                    <button type="button" class="btn btn-primary">
                        Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--END MODAL CONFIG PORTLET-->
</div>
<!--END TOPBAR-->
<div id="wrapper">

    <!--BEGIN PAGE WRAPPER-->
    <div id="page-wrapper">
        <?php require_once($view_path); ?>
    </div>
    <!--END CONTENT-->
    <!--BEGIN FOOTER-->
    <div id="footer">
        <div class="copyright">
            <a href="http://itst.com">Itst</a></div>
    </div>
    <!--END FOOTER-->
</div>
<!--END PAGE WRAPPER-->
<div class="clear"></div>

<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery-1.10.2.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery-ui.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/bootstrap.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/html5shiv.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/respond.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.metisMenu.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.slimscroll.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.cookie.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/icheck.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/custom.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.news-ticker.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.menu.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/pace.min.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/holder.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/responsive-tabs.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.categories.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.pie.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.tooltip.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.resize.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.fillbetween.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.stack.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/jquery.flot.spline.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/zabuto_calendar.min.js"></script>
<!--<script src="<?php echo SEOMGR_ASSETS_URL ?>script/index.js"></script>-->
<!--LOADING SCRIPTS FOR CHARTS-->
<!--<script src="<?php echo SEOMGR_ASSETS_URL ?>script/highcharts.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/data.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/drilldown.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/exporting.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/highcharts-more.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/charts-highchart-pie.js"></script>
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/charts-highchart-more.js"></script>-->
<!--CORE JAVASCRIPT-->
<script src="<?php echo SEOMGR_ASSETS_URL ?>script/main.js"></script>
