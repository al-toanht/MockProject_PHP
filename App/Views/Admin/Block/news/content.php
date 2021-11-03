<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">News Category</h4>
                        <a href="<?php echo _WEB_ROOT ?>/admin-news/storeAdd" class="btn btn-primary"
                            style="float: right;">Add
                            news</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num=1;foreach ($getListNews as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $num++ ?></td>
                                    <td><?php echo $value['title'];?></td>
                                    <td><?php echo $value['content'];?></td>
                                    <td><?php echo $value['description'];?></td>
                                    <td><img style="width: 100px"
                                            src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/images/<?php echo $value['image'];?>"
                                            alt="image">
                                    </td>
                                    <td><?php echo $value['Createdate'];?></td>
                                    <td>
                                        <a
                                            href="<?php echo _WEB_ROOT ?>/admin-news/storeUpdate/<?php echo $value['id']?>"><i
                                                class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <a
                                            href="<?php echo _WEB_ROOT ?>/admin-news/deleteDataNews/<?php echo $value['id']?>">
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