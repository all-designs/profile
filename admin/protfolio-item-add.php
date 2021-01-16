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
    <div class="page protfolio_items add bg_cover" style="background:url(../images/admin_bg.jpg);">
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
                                <h3>Add New Protfolio Items</h3>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Sub-header -->
                <!-- Item Add form -->
                <div class="add_form">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- main form -->
                                <form action="save-item.php">
                                    <div class="form_group">
                                        <label for="item_category">category</label>
                                        <select name="category" id="">
                                            <option value="Select category" disabled selected>Select category</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <label for="exampleInputPassword1">Item Image</label>
                                        <input class="img_file" type="file" name="fileToUpload">
                                    </div>
                                    <div class="form_group">
                                        <label for="link">Item Live Link</label>
                                        <input type="text" name="link" placeholder="Enter item link">
                                    </div>
                                    <button type="submit" name="submit" value="Upload">Upload</button>
                                </form>
                                <!-- main form -->
                            </div>
                        </div>
                        <!-- row -->
                    </div>
                    <!-- container -->
                </div>
                <!-- Item Add form -->
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