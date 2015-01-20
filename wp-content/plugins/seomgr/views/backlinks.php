<div style="display: block;">
<!--img src="<?php echo SEOMGR_BASE_URL.'assets/images/demo/'.$image.'.png'; ?>" /-->
</div>
<form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="POST" id="site_form">
    <label>Site Name</label>
    <input type="text" value="" name="site[title]" id="site[title]" />
    <br/>
    <input type="submit" value="Submit" name="site[submit]" id="site[submit]" />
</form>
<br/>
<form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="POST" id="goup_form">
    <label>GROUP Name</label>
    <input type="text" value="" name="group[title]" id="group[title]" />
    <br/>
    <input type="submit" value="Submit" name="group[submit]" id="group[submit]" />
</form>
<br/>
<form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="POST" id="keyword_form">
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