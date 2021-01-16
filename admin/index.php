<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Page -->
    <div class="page bg_cover" style="background:url(../images/admin_bg.jpg);">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="login_box">
                            <div class="user_image">
                                <div class="image_inner bg_cover" style="background:url(../images/profile_img.png)">
                                </div>
                            </div>
                            <div class="user_name">
                                <h1>Melon Mia</h1>
                            </div>
                            <form action="#">
                                <label for="username">Username</label>
                                <input type="text" name="username">
                                <label for="Password">Password</label>
                                <input type="Password" name="Password">
                                <button type="submit">Log In</button>
                            </form>
                        </div>
                        <!-- logIn Box -->
                    </div>
                    <!-- col -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- overlay -->
    </div>
    <!-- Page -->
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