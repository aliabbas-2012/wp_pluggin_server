<!--BEGIN TITLE & BREADCRUMB PAGE-->

<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
    <div class="page-header pull-left">
        <div class="page-title">
            Groups
        </div>
    </div>

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
                                Group
                            </div>

                            <div class=" breadcrumb pull-right">
                                <a href='javascript:seomgr_show_popup("group", "Group");' class="btn btn-default">Add Group</a>
                            </div>
                            <?php Seomgr_general::getInstance()->renderPartial('lists/group'); ?>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>




<!--END CONTENT-->

<div style = "display: block;">
<!--img src = "<?php echo SEOMGR_BASE_URL . 'assets/images/demo/' . $image . '.png'; ?>" / -->
</div>

<br/>

