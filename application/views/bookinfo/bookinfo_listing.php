<div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">



    <table class="table table-striped table-responsive table-bordered table-hover art_datatable" cellspacing="0" width="100%">

        <thead>



            <tr class="bg-primary">

                <th>SL</th> 

                <th> Book title </th> 

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

                        <?= $result->title ?> 

                    </td>

                    <td class="text-center w300"> 

                        <a class="btn btn-info w100" data-id="<?= $result->id ?>" href="<?= site_url('article/index' . '/' . $result->id) ?>"><i class="fa fa-edit"></i> ARTICLE </a>

                        <a class="edit btn btn-info w100" data-id="<?= $result->id ?>" href="<?= site_url('bookinfo/edit_bookinfo' . '/' . $result->id) ?>"><i class="fa fa-edit"></i> EDIT</a>



                        <a class="delete btn btn-danger" href="<?= site_url('bookinfo/delete_bookinfo/' . $result->id) ?>"><i class="fa fa-times-circle-o"></i> </a>

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


