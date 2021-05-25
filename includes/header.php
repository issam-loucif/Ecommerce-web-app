
<?php
include('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://www.paypal.com/sdk/js?client-id=AXJochlpYNXyVYrbdI8hF4FFrRYvSbw0dvsWxsdoEPO3Gq3nPYJ6o-zAkRW7ddz6EaD4jw6sWx_K6_RR"></script>
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Amado Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="search.php" method="post">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="dropdown amado-btn-group mt-30 mb-100">
                <button class="btn amado-btn mb-15 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Compte
                </button>
                <?php
                     if (isset($_SESSION['logged']) && $_SESSION['logged'] == true):
                ?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="index.php"><i class="fa fa-user"></i>  
                <?php
                    echo $_SESSION['nom'];
                ?>
                    </a>
                    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i>  Deconexion</a>
                </div>
                <?php
                    else:
                ?>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="signin.php"><i class="fa fa-sign-in"></i>  connexion</a>
                    <a class="dropdown-item" href="signup.php"><i class="fa fa-user-plus"></i>  inscription</a>
                </div>
                <?php
                    endif;
                ?>
            </div>

            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="cart.php" class="cart-nav"><img src="img/core-img/cart.png" alt=""> Cart <span> <?php echo !empty($_SESSION['count']) ? $_SESSION['count'] : ""  ?> </span></a>
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->