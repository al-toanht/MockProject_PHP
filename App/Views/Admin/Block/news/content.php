    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Table News</h4>
                        <a href="<?php echo _WEB_ROOT ?>/admin-news/storeAdd" class="btn btn-primary"
                            style="float: right;">Add
                            news</a>
                        <table class="table" style="table-layout:fixed">
                            <thead>
                                <tr>
                                    <th style="width:30px;">No</th>
                                    <th style="width:110px;">Category</th>
                                    <th style="width:200px;">Title</th>
                                    <th style="width:80px;">Image</th>
                                    <th style="width:100px;">Created Date</th>
                                    <th style="width:100px;" colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $num=1;foreach ($getListNews as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $num++ ?></td>
                                    <td style="overflow: auto;"><?php echo $value['category_name'] ?></td>
                                    <td style="overflow: auto;"><?php echo $value['title'];?></td>
                                    <td>
                                        <?php if(!empty($value['image'])){ ?><img style=" width: 90px"
                                            src="<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image'];?>"
                                            alt="image">
                                        <?php }else {
                                            echo "No Image";
                                        }?>
                                    </td>
                                    <td><?php echo $value['createdate'];?></td>
                                    <td>
                                        <a href="<?php echo _WEB_ROOT ?>/admin-news/details/<?php echo $value['id']?>"><i
                                                class="fa fa-info-circle"></i></a>
                                    </td>
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