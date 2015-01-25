<div class="notification_panel" id="notification_panel"></div>
<form action = "<?php echo $_SERVER['REQUEST_URI'] ?>" method = "POST" onSubmit="javascript: return false;" id = "keyword_form" class="save_ajax" >
    <label>Site</label>
    <?php echo Seomgr_general::getInstance()->get_site_dropdown(); ?>
    <br/>
    <label>Group</label>
    <?php echo Seomgr_general::getInstance()->get_group_dropdown(); ?>
    <br/>
    <label>Keyword</label>
    <input type = "text" value = "" name = "keyword[title]" id = "keyword[title]" />
    <br/>
    <input type = "submit" value = "Submit" name = "keyword[submit]" id = "keyword[submit]" onClick="javascript: seomgr_save_form('keyword_form');" />
</form>