<div class="panel panel-visible" style="margin-top: 20px">
    <div class="panel-body pn" style="border: none;">
        <table id="datatable2" class="table-responsive table table-striped table-hover table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr >
                    <th>Title</th>  
                    <th>Status</th>
                    <th class="text-center" style="width: 250px;"> Action </th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (($results)) :
                    foreach ($results as $result) :
                        ?>
                        <tr>
                            <td data-title="Title"> 
                                <?= $result->title ?>  
                            </td> 

                            <td data-title="desc" > 
                                <?= $result->status == 1 ? 'Active' : 'Inactive'; ?>
                            </td>
                            <td class="text-center acon">
                                <a class="tion">
                                    <a class="edit btn btn-info " data-id="<?= $result->id ?>" href="#"><i class="fa fa-edit"></i> </a>
                                    <a class="delete btn btn-danger" href="<?= site_url('pages/delete/' . $result->id); ?>"><i class="fa fa-times-circle-o"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else : ?>
                    <tr>
                        <td colspan="5" align="center">
                            No data Found !
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>


        </table>

    </div>
</div>

<script>
    $('#datatable2').dataTable({
        "lengthMenu": [[50, 70, 100], [50, 70, 100, "All"]]
    });
</script>