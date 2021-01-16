<?php

include "header.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protfolio items</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Protfolio items page -->
    <div class="page protfolio_items category bg_cover" style="background:url(../images/admin_bg.jpg);">
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
                            <div class="col-lg-6">
                                <h3>All Categorys</h3>
                            </div>
                            <div class="col-lg-6">
                                <div class="add_category_btn">
                                    <a class="" href="category-add.php">Add Category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Sub-header -->
                <!-- Items list -->
                <div class="items_lists">
                    <div class="container p-lg-0">
                        <!-- List Head -->
                        <div class="list_head">
                            <div class="row row_style">
                                <div class="col-lg-2">
                                    <div class="si_no">
                                        <h5>SI. NO</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="category">
                                        <h5>Category</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="date">
                                        <h5>Date</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="edit">
                                        <h5>Edit</h5>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="delete">
                                        <h5>Delete</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                        </div>
                        <!-- List Head -->
                        <!-- List Body -->
                        <div class="list_body">
                            <div class="row row_style">
                                <div class="col-lg-2">
                                    <div class="si_no">
                                        <h5>01</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="category">
                                        <h5>Category</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="date">
                                        <h5>Date</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="edit">
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="delete">
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row row_style">
                                <div class="col-lg-2">
                                    <div class="si_no">
                                        <h5>01</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="category">
                                        <h5>Category</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="date">
                                        <h5>Date</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="edit">
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="delete">
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row row_style">
                                <div class="col-lg-2">
                                    <div class="si_no">
                                        <h5>01</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="category">
                                        <h5>Category</h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="date">
                                        <h5>Date</h5>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="edit">
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="delete">
                                        <a href="#"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                        </div>
                        <!-- List Body -->
                    </div>
                    <!-- Container -->
                </div>
                <!-- Items list -->
            </section>
            <!-- Page inner -->
        </div>
    </div>
    <!-- Protfolio items page -->
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