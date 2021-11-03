<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Table Category</h4>
                        <a href="<?php echo _WEB_ROOT ?>/admin-category/storeAdd" class="btn btn-primary"
                            style="float: right;">Add
                            category</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Category_Name</th>
                                    <th>Parent Id</th>
                                    <th>Created</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num=1;foreach ($listcategories as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $num++ ?></td>
                                    <td><?php echo $value['id']?></td>
                                    <td><?php echo $value['category_name'];?></td>
                                    <td><?php echo $value['parent_id'];?></td>
                                    <td><?php echo $value['Createdate'];?></td>
                                    <td>
                                        <a
                                            href="<?php echo _WEB_ROOT ?>/admin-category/storeUpdate/<?php echo $value['id']?>"><i
                                                class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a
                                            href="<?php echo _WEB_ROOT ?>/admin-category/deleteCate/<?php echo $value['id']?>">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>