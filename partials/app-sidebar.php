<?php
    $user = $_SESSION['user'];
?>

<div class="dashboard_sidebar" id="dashboard_sidebar">
    <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
    <div class="dashboard_sidebar_user">
        <img src="images/user/userProfileImage.jpeg" alt="user image" id="userImage" />
        <span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <!-- class="menuActive" -->
            <li class="liMainMenu">
                <a href="./dashboard.php"><i class="fa fa-dashboard"></i> <span class="menuText">Dashboard</span></a>
            </li>
            <li class="liMainMenu">
                <a href="./report.php"><i class="fa fa-file"></i> <span class="menuText">Reports</span></a>
            </li>
            <li class="liMainMenu">
            <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa fa-tag showHideSubMenu"></i>
                    <span class="menuText showHideSubMenu">Product Management</span>
                    <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <ul class="subMenus">
                    <li><a class="subMenuLink" href="./product-view.php"><i class="fa fa-circle-o"></i> View Products</a></li>
                    <li><a class="subMenuLink" href="./product-add.php"><i class="fa fa-circle-o"></i> Add Product</a></li>
                </ul>
            </li>
            <li class="liMainMenu">
                <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa fa-truck showHideSubMenu"></i>
                    <span class="menuText showHideSubMenu">Supplier Management</span>
                    <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <ul class="subMenus">
                    <li><a class="subMenuLink" href="./suppliers-view.php"><i class="fa fa-circle-o"></i> View Suppliers</a></li>
                    <li><a class="subMenuLink" href="./suppliers-add.php"><i class="fa fa-circle-o"></i> Add Supplier</a></li>
                </ul>
            </li>
            <li class="liMainMenu">
                <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa fa-shopping-cart showHideSubMenu"></i>
                    <span class="menuText showHideSubMenu">Purchase Order</span>
                    <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <ul class="subMenus">
                    <li><a class="subMenuLink" href="./product-order.php"> <i class="fa fa-circle-o"></i> Create Order</a></li>
                    <li><a class="subMenuLink" href="./view-order.php"> <i class="fa fa-circle-o"></i> View Orders</a></li>
                </ul>
            </li>
            <li class="liMainMenu showHideSubMenu">
                <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa fa-user-plus showHideSubMenu"></i>
                    <span class="menuText showHideSubMenu">User Management</span>
                    <i class="fa fa-angle-left mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <ul class="subMenus">
                    <li><a class="subMenuLink" href="./users-view.php"><i class="fa fa-circle-o"></i> View Users</a></li>
                    <li><a class="subMenuLink" href="./users-add.php"><i class="fa fa-circle-o"></i> Add User</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>