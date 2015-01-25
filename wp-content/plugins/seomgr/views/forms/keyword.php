<div class="notification_panel" id="notification_panel"></div>
<form action = "<?php echo $_SERVER['REQUEST_URI'] ?>" method = "POST" onSubmit="javascript: return false;" id = "keyword_form" class="save_ajax" >
    <label>Site</label>
    <?php $group_id = ''; 
    if(Seomgr_general::getInstance()->get_value($result, 'site_id')){
        $site_id = Seomgr_general::getInstance()->get_value($result, 'site_id');
    }
    ?>
    <?php echo Seomgr_general::getInstance()->get_site_dropdown($site_id); ?>
    <br/>
    <label>Group</label>
    <?php $group_id = ''; 
    if(Seomgr_general::getInstance()->get_value($result, 'group_id')){
        $group_id = Seomgr_general::getInstance()->get_value($result, 'group_id');
    }
    ?>
    <?php echo Seomgr_general::getInstance()->get_group_dropdown($group_id); ?>
    <br/>
    <label>Keyword</label>
    <input type = "text" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'title'); ?>" name = "keyword[title]" id = "keyword[title]" />
    <br/>
    
    <?php if (Seomgr_general::getInstance()->get_value($result, 'id')) { ?>
        <input type = "hidden" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'id'); ?>" name = "keyword[id]" id = "keyword[id]" />
    <?php } ?>
    
    <input type = "submit" value = "Submit" name = "keyword[submit]" id = "keyword[submit]" onClick="javascript: seomgr_save_form('keyword_form');" />
</form>