<div class="container">
    <section id="section-latest" class="section has-sidebar">
        <header class="section-title">
            <?php foreach($detailsCategory as $key => $value){ ?>
            <h3><?php echo $value['category_name'] ?></h3>
            <?php }?>
        </header>
        <section class="section-content">
            <div class="article-list listing-layout responsive unique">
                <?php foreach($listNewsByCategory as $key => $value){?>
                <article class="article-item  type-text">
                    <p class="article-thumbnail">
                        <a href="<?php echo _WEB_ROOT?>/chi-tiet/<?php echo $value['id']?>">
                            <img src="<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']?>">
                        </a>
                    </p>
                    <header>
                        <p class="article-title">
                            <a href="<?php echo _WEB_ROOT?>/chi-tiet/<?php echo $value['id']?>">
                                <?php echo $value['title'] ?>
                            </a>
                        </p>
                        <p class="article-meta">
                            <span class="article-publish">
                                <span class="date"><?php echo $value['createdate'] ?>
                                </span>
                            </span>
                            <a href=""><?php echo $value['category_name'] ?>
                            </a>
                        </p>
                        <p class="article-summary"><?php echo $value['content'] ?>
                        </p>
                    </header>
                </article>
                <?php }?>
            </div>
        </section>
    </section>

</div>