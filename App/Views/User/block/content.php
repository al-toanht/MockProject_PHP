<main>
    <div class="news">
        <div class="container">
            <div class="row  no-gutters">
                <?php foreach ($newsTopBig as $key => $value){ ?>
                <div class="col-xl-6 "
                    style="background: url(<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']?>);background-repeat: no-repeat;background-size: cover;">
                    <div class="about__bignews">
                        <div class="about__category ">
                            <span><?php echo $value['category_name'] ?></span>
                        </div>
                        <div class="about__date-time___title ">
                            <img alt="" src="<?php echo _WEB_ROOT; ?>/public/Assets/User/icon/timetable.png "><span
                                class="about__date-time "><?php echo $value['createdate'] ?></span>
                            <a href="<?php echo _WEB_ROOT ?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                <p class="about__title "><?php echo $value['title'] ?></p>
                            </a>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div class="col-xl-6">
                    <div class="row child no-gutters" style="height:50%">
                        <?php foreach ($newsTopSmallAbove as $key => $value){ ?>
                        <div class="col-xl-6 col-xl-3"
                            style="height:100%;background: url(<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']?>);background-repeat: no-repeat;background-size: cover;">
                            <div class="about__smallnew">
                                <div class="about__category">
                                    <span class="category5"> <?php echo $value['category_name'] ?> </span>
                                </div>
                                <div class="about__date-time___title ">
                                    <img alt=""
                                        src="<?php echo _WEB_ROOT; ?>/public/Assets/User/icon/timetable.png "><span
                                        class="about__date-time "><?php echo $value['createdate'] ?></span>
                                    <a href="<?php echo _WEB_ROOT ?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                        <p class="about__title "><?php echo $value['title'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="row child no-gutters " style="height:50%">
                        <?php foreach ($newsTopSmallBelow as $key => $value){ ?>
                        <div class="col-xl-6 col-xl-3"
                            style="height:100%;background: url(<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']?>);background-repeat: no-repeat;background-size: cover;">
                            <div class="about__smallnew">
                                <div class="about__category">
                                    <span class="category4"> <?php echo $value['category_name'] ?> </span>
                                </div>
                                <div class="about__date-time___title ">
                                    <img alt=""
                                        src="<?php echo _WEB_ROOT; ?>/public/Assets/User/icon/timetable.png "><span
                                        class="about__date-time "><?php echo $value['createdate'] ?></span>
                                    <a href="<?php echo _WEB_ROOT ?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                        <p class="about__title "><?php echo $value['title'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-news">
        <div class="container">
            <div class="search-news-input">
                <input type="text" class="txt" placeholder="&#61442;  What happend in the continent">
                <button class="button ">Search</button>
            </div>
        </div>
    </div>
    <div class="world">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="banner-news normal-banner">
                        <span>Star</span>
                        <div class="nav-slider">
                            <i class="fa fa-angle-left "></i>
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($listNewsStar as $key=>$value){
                           ?>
                        <div class="col-xl-6">
                            <div class="about__news">
                                <div class="about__category-img">
                                    <a href="<?php echo _WEB_ROOT ?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT ?>/public/Assets/images/<?php echo $value['image']?>">
                                    </a>
                                    <div class="about__category category2">
                                        <span><?php  echo $value['category_name']?></span>
                                    </div>
                                </div>
                                <div class="about__description">
                                    <span class="about__date-time"><i
                                            class="far fa-calendar-alt"></i><?php  echo $value['createdate']?></span>
                                    <span class="comment"><i class="far fa-comment-alt"></i>13</span>
                                    <div class="about__title">
                                        <a
                                            href="<?php echo _WEB_ROOT ?>/trang-chu/detailNews/<?php echo $value['id']?>"><?php  echo $value['title']?></a>
                                    </div>
                                    <p class="description"><?php  echo $value['content']?></p>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="weather">
                        <div class="banner-news smallbanner">
                            <span>weather forecast</span>
                        </div>
                        <div class="weather-forecast">
                            <div class="top-forecast">
                                <div class="top-left-forecast">
                                    <span class="big-text">Mostly Sunny</span>
                                    <div class="big-img">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT ?>/public/Assets/images/partly_cloudy.png">
                                        <span class="degree">6</span>
                                        <div class="degree-c-f">
                                            <span class="degree-c">&#8451; /</span>
                                            <span class="degree-f">&#8457;</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="top-right-forecast">
                                    <span>
                                        LONDON <br> UNITED KINGDOM <br> 13:00,TUE
                                    </span>
                                </div>
                            </div>
                            <div class="weather-forecast__chart">
                                <img alt="" src="<?php echo _WEB_ROOT ?>/public/Assets/images/chart.png">
                            </div>
                            <div class="bottom-forecast">
                                <div class="weather-forecast__day">
                                    <span class="rank">tue</span>
                                    <div class="weather-forecast__img">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT ?>/public/Assets/images//rain_s_cloudy.png">
                                    </div>
                                    <span class="degree-small_first">6&#176;</span>
                                    <span class="degree-small_second">0&#176;</span>
                                </div>
                                <div class="weather-forecast__day">
                                    <span class="rank">wed</span>
                                    <div class="weather-forecast__img">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT ?>/public/Assets/images/partly_cloudy_small.png">
                                    </div>
                                    <span class="degree-small_first">6&#176;</span>
                                    <span class="degree-small_second">0&#176;</span>
                                </div>
                                <div class="weather-forecast__day">
                                    <span class="rank">thu</span>
                                    <div class="weather-forecast__img">
                                        <img alt="" src="<?php echo _WEB_ROOT ?>/public/Assets/images/rain_light.png">
                                    </div>
                                    <span class="degree-small_first">6&#176;</span>
                                    <span class="degree-small_second">0&#176;</span>
                                </div>
                                <div class="weather-forecast__day">
                                    <span class="rank">fri</span>
                                    <div class="weather-forecast__img">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT ?>/public/Assets/images/partly_cloudy_small.png">
                                    </div>
                                    <span class="degree-small_first">6&#176;</span>
                                    <span class="degree-small_second">0&#176;</span>
                                </div>
                                <div class="weather-forecast__day">
                                    <span class="rank">sat</span>
                                    <div class="weather-forecast__img">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT ?>/public/Assets/images/rain_s_cloudy.png">
                                    </div>
                                    <span class="degree-small_first">6&#176;</span>
                                    <span class="degree-small_second">0&#176;</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="radio">
                        <div class="banner-news smallbanner">
                            <span>live content radio</span>
                        </div>
                        <div class="music-player">
                            <button class="button"><i class="fa fa-play-circle-o"></i></button>
                            <div class="music-player-text">
                                Now playing: AVICII - Stories
                            </div>
                            <div class="volume">
                                <div class="volume-text">Volume</div>
                                <div class="img-volume">
                                    <img alt="" src="<?php echo _WEB_ROOT ?>/public/Assets/images/volume.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breaking-news">
        <div class="top-banner">
            <div class="container">
                <div class="top-banner-news">
                    <span class="big">breaking news</span>
                    <div class="top-banner-center">
                        <span class="time">21:13</span>&emsp;
                        <p><i class="fas fa-camera"></i>&ensp;free hour, when our power of choice is umtrammlled and
                            when eing able to do
                        </p>
                    </div>
                    <div class="nav-slider">
                        <i class="fa fa-angle-left"></i>
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="banner-news smallbanner" style="margin-bottom: 5%">
                            <span>cine</span>
                        </div>
                        <?php foreach ($listNewsCine as $key =>$value){
                        ?>
                        <div class="about__description">
                            <span class="about__date-time"><i
                                    class="far fa-calendar-alt"></i><?php echo $value['createdate'] ?></span>
                            <span class="comment"><i class="far fa-comment-alt"></i>13</span>
                            <div class="about__title">
                                <a
                                    href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>"><?php echo $value['title'] ?></a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="col-xl-8">
                        <div class="banner-news normal-banner">
                            <span>the most popular video</span>
                            <div class="nav-slider">
                                <i class="fa fa-angle-left blue-icon"></i>
                                <i class="fa fa-angle-right blue-icon"></i>
                            </div>
                        </div>
                        <div class="play-triangle">
                            <div class="play-video">
                                <iframe class="big-video" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                </iframe>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="play-triangle">
                                    <div class="play-video">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="play-triangle">
                                    <div class="play-video">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="play-triangle">
                                    <div class="play-video">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="play-triangle">
                                    <div class="play-video">
                                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sport-new">
        <div class="container">
            <div class="banner-news">
                <span>SPORT</span>
                <div class="nav-slider">
                    <i class="fa fa-angle-left blue-icon"></i>
                    <i class="fa fa-angle-right blue-icon"></i>
                </div>
            </div>
            <div class="row">
                <?php foreach($listNewsSport as $key => $value){?>
                <div class="col-xl-4">
                    <div class="about__news">
                        <div class="about__category-img">
                            <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                <img alt=""
                                    src="<?php echo _WEB_ROOT ?>/public/Assets/images/<?php echo $value['image']; ?>">
                            </a>
                            <div class="about__category <?php if($value['category_name']=='Hậu Trường'){
                                echo "cate2"; 
                            }else if($value['category_name']=='ESPORTS'){
                                echo "cate3"; 
                            }else {
                                echo "cate1";
                            } ?>">
                                <span class=""><?php echo $value['category_name']; ?></span>
                            </div>
                        </div>
                        <div class="about__description">
                            <span class="about__date-time"><i
                                    class="far fa-calendar-alt"></i><?php echo $value['createdate']; ?></span>
                            <span class="comment"><i class="far fa-comment-alt"></i>13</span>
                            <div class="about__title ">
                                <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                    <?php echo $value['title']; ?>
                                </a>
                            </div>
                            <p class="description"><?php echo $value['content']; ?></p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="live-concert">
        <div class="container">
            <div class="banner-news">
                <span>live concert</span>
            </div>
            <div class="play-triangle">
                <div class="play-video">
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="group-new">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="banner-news smallbanner">
                        <span>author's post</span>
                    </div>
                    <?php foreach($listLastNews as $key => $value){ ?>
                    <div class="about__description">
                        <div class="avatar-user">
                            <img src="<?php echo _WEB_ROOT ?>/public/Assets/images/img1.png" alt="Avatar"
                                style="height: 50px">
                        </div>
                        <div>
                            <span class="about__date-time"><i
                                    class="far fa-calendar-alt"></i><?php echo $value['createdate'] ?></span>
                            <span class="comment"><i class="far fa-comment-alt"></i>13</span>
                            <div class="about__title">
                                <a
                                    href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>"><?php echo $value['title'] ?></a>
                            </div>
                            <p class="description"><?php echo$value['content'] ?></p>
                            <span class="author"><i class="fas fa-user"></i>Sara Ware</span>
                        </div>
                    </div>
                    <?php }?>
                    <div class="banner-news smallbanner">
                        <span>trendings on social</span>
                    </div>
                    <div class="dropdown-trending">
                        <?php foreach($listCategoriesParent as $key => $value){ ?>
                        <div class="dropdown-select">
                            <p class="select"><a
                                    href="<?php echo _WEB_ROOT?>/trang-chu/showNewsParentCategory/<?php echo $value['id']?>"><?php echo $value['category_name'] ?></a>
                            </p>
                            <i class=" fa fa-angle-down"></i>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="banner-news smallbanner">
                                <span>school</span>
                            </div>
                            <?php $num=0;foreach ($listNewsSchool as $key => $value){
                                $num++;
                                if($num==1){
                                    ?> <div class="about__smallnew"
                                style="background: url(<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']?>);background-repeat: no-repeat;background-size: cover;">
                                <div class="about__category">
                                    <span class="category7"> <?php echo $value['category_name']; ?></span>
                                </div>
                                <div class="about__date-time___title ">
                                    <img alt=""
                                        src="<?php echo _WEB_ROOT; ?>/public/Assets/User/icon/timetable.png "><span
                                        class="about__date-time "><?php echo $value['createdate']; ?></span>
                                    <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                        <p class="about__title "><?php echo $value['title']; ?></p>
                                    </a>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="title-new">
                                <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                    <p class="about__title "><?php echo $value['title']; ?></p>
                                    </p>
                                </a>
                            </div>
                            <?php  } }?>
                        </div>
                        <div class="col-xl-6">
                            <div class="banner-news smallbanner">
                                <span>music</span>
                            </div>
                            <?php $num=0;foreach ($listNewsMusic as $key => $value){
                                $num++;
                                if($num==1){
                                    ?> <div class="about__smallnew"
                                style="background: url(<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']?>);background-repeat: no-repeat;background-size: cover;">
                                <div class="about__category">
                                    <span class="category4"> <?php echo $value['category_name']; ?></span>
                                </div>
                                <div class="about__date-time___title ">
                                    <img alt=""
                                        src="<?php echo _WEB_ROOT; ?>/public/Assets/User/icon/timetable.png "><span
                                        class="about__date-time "><?php echo $value['createdate']; ?></span>
                                    <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                        <p class="about__title "><?php echo $value['title']; ?></p>
                                    </a>
                                </div>
                            </div>
                            <?php }else{ ?>
                            <div class="title-new">
                                <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                    <p class="about__title "><?php echo $value['title']; ?></p>
                                    </p>
                                </a>
                            </div>
                            <?php  } }?>
                        </div>
                        <div class="col-xl-12">
                            <div class="banner-news normal-banner">
                                <span>World</span>
                            </div>
                            <div id="myCarousel" class="carousel slide border" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $num=0; foreach($listNewsWorld as $key=>$value){
                                        $num++;
                                        if($num==1){?>
                                    <div class="carousel-item active">
                                        <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                            <img class="d-block w-100" style="max-height: 500px;"
                                                src="<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']; ?>"
                                                alt="Leopard">
                                        </a>
                                        <div class="carousel-caption d-none d-md-block">
                                            <a class="link-carousel"
                                                href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                                <h5><?php echo $value['title']; ?></h5>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }else {?>
                                    <div class="carousel-item">
                                        <a href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                            <img class="d-block w-100" style="max-height: 500px;"
                                                src="<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']; ?>"
                                                alt="Leopard">
                                        </a>

                                        <div class="carousel-caption d-none d-md-block">
                                            <a class="link-carousel"
                                                href="<?php echo _WEB_ROOT?>/trang-chu/detailNews/<?php echo $value['id']?>">
                                                <h5><?php echo $value['title']; ?></h5>
                                            </a>
                                        </div>
                                    </div>
                                    <?php }?>
                                    <?php }?>
                                </div>
                                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="row">
                                <?php foreach($listNewsWorld as $key=>$value){ ?>
                                <div class="col-xl-3">
                                    <div class="about__category-img">
                                        <img alt=""
                                            src="<?php echo _WEB_ROOT; ?>/public/Assets/images/<?php echo $value['image']; ?>">
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>