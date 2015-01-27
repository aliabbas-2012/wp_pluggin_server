<?php $results = Seomgr_site_model::getInstance()->get(); ?>
<table  class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
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
                    <td><?php echo $row->title; ?></td>
                    <td><?php echo Seomgr_general::getInstance()->date_format($row->created_at); ?></td>
                    <td>
                        <div class="page-toolbar">
                            <button class="btn btn-blue" title="" onClick='javascript:seomgr_show_popup("site", "Site", "<?php echo $row->id; ?>");' data-hover="tooltip" type="button" data-original-title="Update">
                                <i class="fa fa-pencil"></i>
                            </button>
                            &nbsp;
                            <button class="btn btn-yellow" title="" onClick='javascript:seomgr_delete("delete_site", "<?php echo $row->id; ?>");' data-hover="tooltip" type="button" data-original-title="Delete">
                                <i class="fa fa-trash-o"></i>
                            </button>
                            &nbsp;
                        </div>
                    </td>
                </tr>
            <?php }
        }
        ?>
    </tbody>
</table>
