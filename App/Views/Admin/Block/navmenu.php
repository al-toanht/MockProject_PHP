<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle"
                        src="<?php echo _WEB_ROOT; ?>/public/Assets/images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <p class="profile-name">
                        <?php echo (!empty($_SESSION['username'])) ? $_SESSION['username'] : ''; ?>
                    </p>
                    <p class="designation">ADMIN</p>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">Main Menu</li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo _WEB_ROOT;?>/admin-category">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo _WEB_ROOT;?>/admin-news">
                <i class="menu-icon typcn typcn-shopping-bag"></i>
                <span class="menu-title">News</span>
            </a>
        </li>
    </ul>
</nav>