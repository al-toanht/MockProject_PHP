<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1>Details News </h1>
                    <?php foreach ($detailNews as $key => $value){?>
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="inputTitle">Category Post</label>
                            <select class="form-control form-control-lg" id='cate_id' name='cate_id'>
                                <option value='<?php echo $value['id'] ?>'>
                                    <?php echo $value['category_name'] ?></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputTitle">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title"
                                value="<?php echo $value['title'] ?>" disabled>
                        </div>
                        <div class=" form-group">
                            <label for="textContent">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="2"
                                disabled><?php echo $value['content'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea class="form-control" name="description" id="editor1"
                                disabled><?php echo $value['description'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <img class="file-upload-image"
                                src="<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']; ?>"
                                alt="your image" />
                        </div>
                    </form>
                    <button onclick="location.href='<?php echo _WEB_ROOT; ?>/admin-news'"
                        class="btn btn-dark btn-fw">Back</button>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>
</div>