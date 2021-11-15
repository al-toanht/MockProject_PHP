    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Table Category</h4>
                        <a href="<?php echo _WEB_ROOT ?>/admin-category/addCategory" class="btn btn-primary"
                            style="float: right;">Add
                            category</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Category_Name</th>
                                    <th>Parent Id</th>
                                    <th>Created Date</th>
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
                                            href="<?php echo _WEB_ROOT ?>/admin-category/updateCate/<?php echo $value['id']?>"><i
                                                class="fa fa-edit"></i></a>
                                    </td>
                                    <td>
                                        <p class='card-table-link'
                                            style='margin-bottom:0;cursor:pointer;color: #007bff;' title='Update Record'
                                            data-target='#exampleModalLong<?php echo $value['id']; ?>'
                                            data-toggle='modal'>
                                            </a> <i class="fa fa-trash-o"></i>
                                        <form
                                            action="<?php echo _WEB_ROOT ?>/admin-category/deleteCate/<?php echo $value['id']?>"
                                            method='POST' enctype='multipart/form-data' class='modal fade'
                                            id='exampleModalLong<?php echo $value['id']?>' tabindex='-1' role='dialog'
                                            aria-labelledby='exampleModalLongTitle<?php echo $value['id']?>'
                                            aria-hidden='true'>
                                            <div class='modal-dialog' role='document'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h4 style="color: red;" class='modal-title'
                                                            style="text-transform: uppercase;"
                                                            id='exampleModalLongTitle<?php echo $value['id']?>'>
                                                            Bạn Có Chắc Chắn Muốn Xoá Danh Mục Này.
                                                            <br><br>Sẽ Xoá Tất Cả Bài Post Thuộc Danh Mục Này</h5>
                                                            <button type='button' class='close' data-dismiss='modal'
                                                                aria-label='Close'>
                                                                <span aria-hidden='true'>&times;</span>
                                                            </button>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-secondary'
                                                            data-dismiss='modal'>Đóng</button>
                                                        <input type='submit' name='submit' class="btn btn-danger"
                                                            value='Xoá'>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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