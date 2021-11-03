<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h1>Add New Post</h1>
                        <?php foreach ($detailNews as $key => $value) {?>
                        <form class="forms-sample" method="POST" enctype="multipart/form-data"
                            action="<?php echo _WEB_ROOT?>/admin-news/updateDataNews/<?php echo  $value['id'];?>">
                            <div class="form-group">
                                <label for="inputTitle">Category Post</label>
                                <select class="form-control form-control-lg" id='cate_id' name='cate_id'>
                                    <?php foreach ($listcategories as $key => $value1){?>
                                    <option value='<?php echo $value1['id'] ?>'>
                                        <?php echo $value1['category_name'] ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputTitle">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                                    value="<?php echo $value['title'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="textContent">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="2"
                                    vrequired><?php echo $value['content'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description</label>
                                <textarea class="form-control" name="description" id="editor1"
                                    required><?php echo $value['description'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <div class="file-upload">
                                    <button class="file-upload-btn" type="button"
                                        onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                                    <div class="image-upload-wrap" style="display:none">
                                        <input class="file-upload-input" type='file' name="HinhAnh" id="HinhAnh"
                                            onchange="readURL(this);" accept="image/*" />
                                        <div class="drag-text">
                                            <h3>Drag and drop a file or select add Image</h3>
                                        </div>
                                    </div>
                                    <div class="file-upload-content" style="display:block">
                                        <img class="file-upload-image"
                                            src="<?php echo _WEB_ROOT; ?>/public/Assets/Admin/images/<?php echo $value['image'];?>"
                                            alt="your image" />
                                        <div class="image-title-wrap">
                                            <button type="button" onclick="removeUpload()" class="remove-image">Remove
                                                <span class="image-title"><?php echo $value['image'];?></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2 " name="submit">Add</button>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>