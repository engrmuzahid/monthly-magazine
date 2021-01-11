<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

    <table class="table table-striped table-responsive table-bordered table-hover art_datatable" cellspacing="0" width="100%">
        <thead>

            <tr class="bg-primary">
                <th>SL</th> 
                <th> Chapter </th> 
                 <th> Sort Order </th> 
                <th class="bg-primary"> Action </th>
            </tr>
        </thead>
        <tbody>

            <?php
            $cnt = 0;
            foreach ($results as $result) :
                ?>

                <tr>
                    <td><?= $result->id ?> </td> 
                    <td>
                        <?= $result->page_title ?> 
                    </td>
                     <td>
                        <?= $result->sort_order ?> 
                    </td>
                    <td class="text-center w175"> 
                        <a class="edit btn btn-info w100" data-id="<?= $result->id ?>" href="<?= site_url('page/edit_page' . '/' . $result->id) ?>"><i class="fa fa-edit"></i> EDIT</a>
                        <a class="delete btn btn-danger" href="<?= site_url('page/delete_page/' . $result->id) ?>"><i class="fa fa-times-circle-o"></i> </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>
</div>
