<?php
include "header.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Protfolio items Add page -->
    <div class="page protfolio_items bg_cover" style="background:url(../images/admin_bg.jpg);">
        <div class="overlay">
            <!-- Header Top -->
            <header>
                <div class="container p-lg-0">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="user_img">
                                <div class="image_inner bg_cover" style="background:url(../images/profile_img.png)">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="user_name">
                                <h2>Melon Mia</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header Top-->
            <!-- Navbar -->
            <nav class="admin_menu navbar-expand-lg navbar-light">
                <div class="container p-lg-0">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="main_menu me-auto mb-2 mb-lg-0">
                            <li class="menu_itams">
                                <a class="link active" aria-current="page" href="#">Protfolio Items</a>
                            </li>
                            <li class="menu_itams">
                                <a class="link" href="#">Category</a>
                            </li>
                            <li class="menu_itams">
                                <a class="link" href="#">Settings</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <button class="btn btn-outline-light" type="submit">Log Out</button>
                        </form>
                    </div>
                </div>
                <!-- Container -->
            </nav>
            <!-- Navbar -->
            <!-- Page inner -->
            <section class="page_inner">
                <!-- Sub-header -->
                <header class="sub_header">
                    <div class="container p-lg-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3>Website Settings</h3>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Sub-header -->
                <!-- Setting items -->
                <section class="settings">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 p-lg-0">
                                <!-- Updated Form -->
                                <form action="">
                                    <label for="Change_name">Change Full Name</label>
                                    <div class="form_group">
                                        <div class="first_name">
                                            <label for="FirstName">First Name</label>
                                            <input name="first_name" type="text">
                                        </div>
                                        <div class="last_name">
                                            <label for="LastName">Last Name</label>
                                            <input name="last_name" type="text">
                                        </div>
                                    </div>
                                    <label for="username_password">Change Username & Password</label>
                                    <div class="form_group">
                                        <div class="username">
                                            <label for="username">Username</label>
                                            <input name="username" type="text">
                                        </div>
                                        <div class="password">
                                            <label for="password">Password</label>
                                            <input name="password" type="password">
                                        </div>
                                    </div>
                                    <div class="form_group single">
                                        <label for="WebsiteName">Change Website Name</label>
                                        <input name="websitename" type="text">
                                    </div>
                                    <div class="form_group single">
                                        <label for="ProfileImage">Change Profile Image</label>
                                        <input class="file" name="profileimage" type="file">
                                    </div>
                                    <div class="form_group single">
                                        <label for="FooterDescription">Footer Description</label>
                                        <textarea name="footer" id=""></textarea>
                                    </div>
                                    <button type="submit">Updated</button>
                                </form>
                                <!-- Updated Form -->
                            </div>
                            <!-- col -->
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </section>
                <!-- Setting items -->
            </section>
            <!-- Page inner -->
        </div>
        <!-- Overlay -->
    </div>
    <!-- Protfolio items Add page -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© Copyright 2021 News | Powered by <a href="#">Melon Mia</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
</body>

</html>
<?php
include "footer.php";
?>