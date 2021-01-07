<div class="admin-form">
    <div class="panel panel-alert heading-border">
        <div class="panel-heading">
            <span class="panel-title"> User Listing </span>
            <span class="panel-title pull-right "><a href="" class="btn btn-primary" id="addUser"> <span class="fa fa-plus-square"></span>  Add New User </a></span>
        </div>
        <div class="panel panel-visible">
            <div class="panel-body pn">
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                    <table class="table table-striped table-responsive table-bordered table-hover restaurent_datatable" cellspacing="0" width="100%">
                        <thead>

                            <tr class="bg-primary">
                                <th> SL </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Address </th>
                                <th> Phone </th>
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
                                        <?= "$result->first_name $result->last_name" ?>
                                    </td>
                                    <td>
                                        <?= $result->email ?>
                                    </td>
                                    <td>
                                        <?= $result->address ?>
                                    </td>
                                   
                                    <td class="text-center w200">
                                        <a class="edit btn btn-info" data-id="<?= $result->id ?>" href="<?= site_url('user/edit_user/' . $result->id) ?>"><i class="fa fa-edit"></i> EDIT</a>
                                        <a class="delete btn btn-danger" href="<?= site_url('user/delete_user/' . $result->id) ?>"><i class="fa fa-times-circle-o"></i> delete</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
