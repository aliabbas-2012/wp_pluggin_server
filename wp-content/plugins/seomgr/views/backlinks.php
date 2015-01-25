<!--BEGIN TITLE & BREADCRUMB PAGE-->

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">
            Forms</div>
    </div>
    <ol class="breadcrumb page-breadcrumb pull-right">
        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i
                class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="hidden"><a href="#">Forms</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
        <li class="active">Forms</li>
    </ol>
    <div class="clearfix">
    </div>
</div>
<!--END TITLE & BREADCRUMB PAGE-->
<!--BEGIN CONTENT-->
<div class="page-content">
    <div id="tab-general">
        <div class="row mbl">
            <div class="col-lg-12">
                <div class="col-md-12">
                    <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row">


                    <div class="col-lg-12">
                        <div class="panel panel-pink">
                            <div class="panel-heading">
                                Site
                            </div>

                            <a href='javascript:seomgr_show_popup("site");'>Add Site</a>

                            <?php Seomgr_general::getInstance()->render_view('lists/site'); ?>

                            <a href='javascript:seomgr_show_popup("group");'>Add Group</a>
                            <?php //echo Seomgr_general::getInstance()->render_view('forms/group', '', true); ?>

                            <?php Seomgr_general::getInstance()->render_view('lists/group'); ?>    

                            <a href='javascript:seomgr_show_popup("keyword");'>Add Keyword</a>
                            <?php //echo Seomgr_general::getInstance()->render_view('forms/keyword', '', true); ?>

                            <?php Seomgr_general::getInstance()->render_view('lists/keyword'); ?>


                            <!--form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" id="site_form">

                                <div class="panel-body pan">
                                    <form action="#">
                                        <div class="form-body pal">
                                            <div class="form-group">
                                                <div class="input-icon right">
                                                    <i class="fa fa-user"></i>
                                                    <input name="site[title]" id="site[title]" type="text" placeholder="Site Name" class="form-control" />


                                                </div>
                                            </div>

                                        </div>

                                </div>
                                <div class="form-actions text-right pal">
                                    <button type="submit" class="btn btn-primary">
                                        Submit</button>
                                </div>
                            </form-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div id="dialog" title="Basic dialog"></div>

<!--END CONTENT-->

<div style = "display: block;">
<!--img src = "<?php echo SEOMGR_BASE_URL . 'assets/images/demo/' . $image . '.png'; ?>" / -->
</div>

<br/>

