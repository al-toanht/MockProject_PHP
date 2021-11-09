<main>
    <div class="page-wrapper">
        <div class="container">
            <?php  foreach ($detailsnews as $key =>$value){ ?>
            <article class="the-article">
                <header class="the-article-header">
                    <p class="the-article-category">
                        <a href=""><?php echo $value['category_name'];?></a>
                    </p>
                    <h1 class="the-article-title"> <?php echo $value['title'];?>
                    </h1>
                    <ul class="the-article-meta">
                        <li class="the-article-author">
                            Nhóm Phóng Viên
                        </li>
                        <li class="the-article-publish">
                            <?php echo $value['createdate'];?> </li>
                    </ul>
                </header>
                <section class="main">
                    <img class="img-main" alt=""
                        src="<?php echo _WEB_ROOT ?>/public/Assets/images/<?php echo $value['image']?>">
                    <p class="the-article-summary">
                        <?php echo $value['content'];?>
                    </p>
                    <div class="the-article-body">
                        <?php echo $value['description'];?>
                    </div>
                </section>
            </article>
            <?php }?>
        </div>
    </div>
</main>