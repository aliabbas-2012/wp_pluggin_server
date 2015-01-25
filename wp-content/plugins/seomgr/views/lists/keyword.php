<?php $results = Seomgr_keyword_model::getInstance()->get(); ?>
<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Site</th>
            <th>Group</th>
            <th>Keyword</th>
            <th>Created On</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($results)) {
            $i = 0;
            foreach ($results as $row) {
                ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $row->site_id; ?></td>
                    <td><?php echo $row->group_id; ?></td>
                    <td><?php echo $row->title; ?></td>
                    <td><?php echo Seomgr_general::getInstance()->date_format($row->created_at); ?></td>
                    <td>
                        <a href='javascript:seomgr_show_popup("keyword", "<?php echo $row->id; ?>");'>Update</a>
                        <a href='javascript:seomgr_delete("delete_keyword", "<?php echo $row->id; ?>");'>Delete</a>
                    </td>
                </tr>
            <?php
            }
        }
        ?>
    </tbody>
</table>
