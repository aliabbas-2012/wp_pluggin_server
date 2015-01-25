<form action = "<?php echo $_SERVER['REQUEST_URI'] ?>" method = "POST" onSubmit="javascript: return false;" id = "group_form"  class="save_ajax"  >
    <label>GROUP Name</label>
    <input type = "text" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'title'); ?>" name = "group[title]" id = "group[title]" />
    <?php if (Seomgr_general::getInstance()->get_value($result, 'id')) { ?>
        <input type = "hidden" value = "<?php echo Seomgr_general::getInstance()->get_value($result, 'id'); ?>" name = "group[id]" id = "group[id]" />
    <?php } ?>
    <br/>
    <input type = "submit" value = "Submit" name = "group[submit]" id = "group[submit]" onclick="javascript:seomgr_save_form('group_form');"/>
</form>