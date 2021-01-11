<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">



    <table class="table table-striped table-responsive table-bordered table-hover art_datatable" cellspacing="0" width="100%">

        <thead>



            <tr class="bg-primary">

                <th>SL</th>

                <th>Version </th>

                <th> Chapter </th>

                <th> Title </th>

                <th> Description </th>
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

                    <td><?= ++$cnt ?></td>

                    <td>

                        <?= $result->book_title ?> 

                    </td>

                    <td>

                        <?= $result->name ?> 

                    </td>

                    <td>

                        <?= $result->title ?> 

                    </td>

                    <td><?php if(mb_strlen(strip_tags($result->description)) > 200): ?>

                        <?= mb_substr(strip_tags($result->description), 0, 200); ?>

                        <?php else: ?>

                         <?= strip_tags($result->description); ?>

                        <?php endif; ?>

                    </td>
  <td>

                        <?= $result->sort_order; ?> 

                    </td>

                    <td class="text-center w175"> 

                        <a class="edit btn btn-info w100" data-id="<?= $result->id ?>" href="<?= site_url('article/edit_article' . '/' . $result->id) ?>"><i class="fa fa-edit"></i> EDIT</a>



                        <a class="delete btn btn-danger" href="<?= site_url('article/delete_article/' . $result->id) ?>"><i class="fa fa-times-circle-o"></i> </a>

                    </td>

                </tr>



            <?php endforeach; ?>



        </tbody>



    </table>

</div>

<script type='text/javascript'>
    var dTableOptions = {
        "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
        "oLanguage": {
            "oPaginate": {
                "sPrevious": "",
                "sNext": ""
            }
        },
        "iDisplayLength": 200,
        "aLengthMenu": [
            [50, 100, 200, 300 - 1],
            [50, 100, 200, 300, "All"]
        ],
        "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
        "bDestroy": true
    };
    $('.art_datatable').dataTable(dTableOptions);
</script>

