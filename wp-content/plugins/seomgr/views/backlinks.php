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
                            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" id="site_form">

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
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--END CONTENT-->

<div style="display: block;">
<!--img src="<?php echo SEOMGR_BASE_URL . 'assets/images/demo/' . $image . '.png'; ?>" /-->
</div>

<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" id="goup_form">
    <label>GROUP Name</label>
    <input type="text" value="" name="group[title]" id="group[title]" />
    <br/>
    <input type="submit" value="Submit" name="group[submit]" id="group[submit]" />
</form>
<br/>
<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" id="keyword_form">
    <label>Site</label>
    <input type="text" value="" name="keyword[site]" id="keyword[title]" />
    <br/>
    <label>Group</label>
    <input type="text" value="" name="keyword[group]" id="keyword[title]" />
    <br/>
    <label>Keyword</label>
    <input type="text" value="" name="keyword[title]" id="keyword[title]" />
    <br/>
    <input type="submit" value="Submit" name="keyword[submit]" id="keyword[submit]" />
</form>
