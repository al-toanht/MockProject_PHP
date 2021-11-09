    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h1>Update Category</h4>
                                    <?php foreach ($detailCategory as $key => $value) {?>
                                    <form class="forms-sample" method="POST"
                                        action="<?php echo _WEB_ROOT?>/admin-category/updateCate/<?php echo  $value['id'];?>">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category Name</label>
                                            <input type="text" class="form-control" id="category_name"
                                                name="category_name" placeholder="Enter category name"
                                                value="<?php echo $value['category_name']?>" required>
                                            </br>
                                            </br>
                                            <label for="exampleInputEmail1">Parent Category </label>
                                            </br>
                                            <select class="form-control form-control-lg" id='parent_category'
                                                name='parent_category'>
                                                <option value='0'>default</option>
                                                <?php foreach ($listcategories as $key => $value1){?>
                                                <option value='<?php echo $value1['id'] ?>'>
                                                    <?php echo $value1['category_name'] ;?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-success mr-2" value="Update">
                                        <?php }?>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>