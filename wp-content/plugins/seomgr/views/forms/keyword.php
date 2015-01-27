<div class="col-lg-12">
    <div class="panel panel-pink">
        <div class="panel-body pan">
            <form class="form-horizontal save_ajax" ction = "<?php echo $_SERVER['REQUEST_URI'] ?>" method = "POST" onSubmit="javascript: return false;" id = "site_form"  >
                <div class="form-body pal">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputName">Site</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <?php
                                $group_id = '';
                                if (Seomgr_general::getInstance()->get_value($result, 'site_id')) {
                                    $site_id = Seomgr_general::getInstance()->get_value($result, 'site_id');
                                }
                                ?>
                                <?php echo Seomgr_general::getInstance()->get_site_dropdown($site_id); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputName">Group</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <?php
                                $group_id = '';
                                if (Seomgr_general::getInstance()->get_value($result, 'group_id')) {
                                    $group_id = Seomgr_general::getInstance()->get_value($result, 'group_id');
                                }
                                ?>
                                <?php echo Seomgr_general::getInstance()->get_group_dropdown($group_id); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputName">Keyword</label>
                        <div class="col-md-9">
                            <div class="input-icon right">
                                <input type = "text" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'title'); ?>" name = "keyword[title]" id = "keyword[title]" />
                            </div>
                        </div>
                    </div>


                </div>

                <?php if (Seomgr_general::getInstance()->get_value($result, 'id')) { ?>
                    <input type = "hidden" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'id'); ?>" name = "keyword[id]" id = "keyword[id]" />
                <?php } ?>


                <div class="form-actions pal">
                    <div class="form-group mbn">
                        <div class="col-md-offset-3 col-md-6">
                            <input type = "submit" class="btn btn-primary" value = "Submit" name = "site[submit]" id = "group[submit]" onclick="javascript:seomgr_save_form('site_form');"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

