<?php $results = Seomgr_group_model::getInstance()->get(); ?>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Created On</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($results)) {
            $i = 0;
            foreach ($results as $row){
                ?>
            <tr id='group_<?php echo $row->id; ?>'>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $row->title; ?></td>
                <td><?php echo Seomgr_general::getInstance()->date_format($row->created_at); ?></td>
                <td>
                    <a href='javascript:seomgr_show_popup("group", "<?php echo $row->id; ?>");'>Update</a>
                    <a href='javascript:seomgr_delete("delete_group", "<?php echo $row->id; ?>");'>Delete</a>
                </td>
            </tr>
        <?php } } ?>
    </tbody>
</table>
