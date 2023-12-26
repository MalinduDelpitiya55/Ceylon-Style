<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/header.css" >
</head>
<body>
        <!-- header -->
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href=" Homepage.php"><img src="../images/logo 4.png" width="50px" alt="Logo Not Found" ></a>
                </div>

                <nav>
                    <ul>
                        <li><a1 href=""><input type="text" class="search" placeholder="Search Products..." /></a1></li>
                        <li><a1 href=""><img src="../images/interface icons/search.png" width="35px" /></a1></li>
                        <li><a href=""><img src="../images/interface icons/cart.png" width="35px" /></a></li>
                        
                            <?php
                                if (isset($_SESSION["username"])) {
                                    echo '<li><a id="RegisterdUser" href="#">Hello '. $_SESSION["username"] . ' !<img src="../images/interface icons/login.png" width="35px" /></a></li>';
                                    echo '<li><a id="RegisterdUser" href="#">Hello '. $_SESSION["username"] . ' !<img src="../images/interface icons/login.png" width="35px" /></a></li>';
                                } else {
                                  echo '<li><a id="User" href="Loginpage.php">Hello User !<img src="../images/interface icons/login.png" width="35px" /></a></li>';
                                }
                            ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
                            </body>
                            </html>