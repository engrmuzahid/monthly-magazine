<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

    <table class="table table-striped table-responsive table-bordered table-hover art_datatable" cellspacing="0" width="100%">
        <thead>

            <tr class="bg-primary">
                <th> SL </th> 
                <th> Notice </th> 
                <th> Notice title </th> 
                <th class="bg-primary"> Action </th>
            </tr>
        </thead>
        <tbody>

            <?php
            $cnt = 0;
            foreach ($results as $result) :
                ?>

                <tr>
                    <td><?= ++$cnt ?></td> 
                    <td>
                        <img src="<?php echo base_url('assets/site/notice'); ?>/<?= $result->image_url ?>" class="h-100">
                    </td>
                     <td>
                        <?= $result->notice_title ?> 
                    </td>
                    <td class="text-center w300"> 
                        <a class="edit btn btn-info w100" data-id="<?= $result->id ?>" href="<?= site_url('notice/edit_notice' . '/' . $result->id) ?>"><i class="fa fa-edit"></i> EDIT</a>
                        <a class="delete btn btn-danger" href="<?= site_url('notice/delete_notice/' . $result->id) ?>"><i class="fa fa-times-circle-o"></i> </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>
</div>
