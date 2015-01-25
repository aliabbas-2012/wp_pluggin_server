<div class="notification_panel" id="notification_panel"></div>
<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" onSubmit="javascript: return false;" id="site_form"  class="save_ajax"  >
    <label>Site Name</label>
    <input type="text" value="<?php echo Seomgr_general::getInstance()->get_value($result, 'title'); ?>" name="site[title]" id="site[title]" />
    <?php if (Seomgr_general::getInstance()->get_value($result, 'id')) { ?>
        <input type = "hidden" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'id'); ?>" name = "site[id]" id = "site[id]" />
    <?php } ?>
    <br/>
    <input type="submit" value="Submit" name="site[submit]" id="site[submit]" onClick="javascript:seomgr_save_form('site_form', 'notification_panel')" />
</form>