<header>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 text-top">
                    <span class="text-left">Currency rates</span>
                </div>
                <div class="col-xl-10">
                    <ul class="top-bar__rates-list">
                        <li>
                            <i class="fa fa-angle-left"></i>
                        </li>
                        <li>
                            <span class="text-rate">USD/EUR</span>
                        </li>
                        <li>
                            <span>1.07724</span>
                        </li>
                        <li>
                            <span class="num-down">-0.00305
                                <i class="fa fa-caret-down"></i>
                            </span>
                        </li>
                        <li>
                            <span class="text-rate">USD/JPY</span>
                        </li>
                        <li>
                            <span>122.831</span>
                        </li>
                        <li>
                            <span class="num-down">-0.00305
                                <i class="fa fa-caret-down	"></i>
                            </span>
                        </li>
                        <li>
                            <span class="text-rate">GBP/USD</span>
                        </li>
                        <li>
                            <span>1.52214</span>
                        </li>
                        <li>
                            <span class="num-down">-0.00305
                                <i class="fa fa-caret-down	
                                     "></i>
                            </span>
                        </li>
                        <li>
                            <span class="text-rate">UAH/USD</span>
                        </li>
                        <li>
                            <span>122.831</span>
                        </li>
                        <li>
                            <span class="num-up">+0.00305
                                <i class="fa fa-caret-up	
                                "></i>
                            </span>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="top-nav">
        <div class="top_nav_menu_logo">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2">
                        <span class="top-nav__logo">
                            <a href="<?php echo _WEB_ROOT; ?>/trang-chu">
                                c<img alt="" class="logo"
                                    src="<?php echo _WEB_ROOT; ?>/public/Assets/User/icon/Forma-1.png">ntient
                            </a>
                        </span>
                    </div>
                    <div class="col">
                        <ul class="top_nav__menu">
                            <?php !empty($listCategories) ? showCategoriesHeader($listCategories) :false; ?>
                        </ul>
                    </div>
                    <div class="col-xl-3 ">
                        <div class="top-nav__links ">
                            <a href=" ">EN</a> &emsp;
                            <a href="<?php echo _WEB_ROOT; ?>/login" class="user "><i class="fa fa-user icon "></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>