    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1>Add New Category</h4>
                                    <form class="forms-sample" method="POST"
                                        action="<?php echo _WEB_ROOT?>/admin-category/addCategory">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" id="category_name"
                                                name="category_name" placeholder="Enter category name"
                                                value="<?php echo $dataInsert['category_name']; ?>" required>
                                            <span
                                                style="color: red;"><?php echo (!empty($message)) ? $message:false; ?></span>
                                            </br>
                                            </br>
                                            <label for="exampleInputEmail1">Parent Category </label>
                                            </br>
                                            <select class="form-control form-control-lg" id='parent_category'
                                                name='parent_category'>
                                                <option value='0'>default</option>
                                                <?php foreach ($categoriesParent as $key => $value){?>
                                                <option value='<?php echo $value['id'] ?>'
                                                    <?php if($value['id'] == $dataInsert['parent_id']) echo 'selected' ?>>
                                                    <?php echo $value['category_name'] ?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-success mr-2" value="Add">
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>