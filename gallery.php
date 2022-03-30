<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Georges Garden Shop - Gallery</title>
        <link rel="stylesheet" href="css/foundation.min.css">
        <link rel="stylesheet" href="css/icons/foundation-icons.css">
        <link rel="stylesheet" href="css/gallery.css">

        <?php

            $root = $_SERVER["DOCUMENT_ROOT"] . "/foundationfinal";

        ?>

    </head>

    <body>

        <a class="hide" href="#main" accesskey="S"> Skip navigation </a>

        <div class="title-bar" data-responsive-toggle="responsive-menu"
            data-hide-for="medium">

            <button aria-label="Menu" class="menu-icon" type="button"
                data-toggle="responsive-menu">

                <span class="hide">
                    Menu
                </span>

            </button>

            <div class="title-bar-title">
                Menu
            </div>

        </div>

        <header class="top-bar" id="responsive-menu">

            <div class="top-bar-left show-for-medium">

                <span role="img" aria-label="Georges Garden Shop">

                    <span class="hide">
      
                      Georges Garden Shop
      
                    </span>
      
                 </span>

            </div>

            <nav class="grid-x top-bar-right">

                <ul class="cell text-center vertical medium-horizontal dropdown
                    menu" data-dropdown-menu>

                    <li class="align-self-middle"><a accesskey="1"
                            href="./index.html">HOME</a></li>
                    <li class="align-self-middle"><a accesskey="2"
                            href="./contact.php">CONTACT</a></li>
                    <li class="align-self-middle"><a accesskey="3"
                            href="./gallery.php"><h1>GALLERY</h1></a></li>
                    <li class="align-self-middle"><a accesskey="4"
                            href="./video.html">VIDEO</a></li>

                </ul>

            </nav>

        </header>

        <main id="main" class="grid-container grid-y">

            <h2 class="cell text-center medium-text-right">Products</h2>

            <i class="fi-thumbnails"></i>

            <ul class="grid-x align-center menu">
                <li><a class="cell subheader" href="#plants">Plants</a></li>
                <li><a class="cell subheader" href="#pots">Pots</a></li>
                <li><a class="cell subheader" href="#gifts">Gifts</a></li>
                <li><a class="cell subheader" href="#garden-tools">Garden tools</a></li>
                <li><a class="cell subheader" href="#fertilisers">Fertilisers</a></li>

            </ul>

            <section class="grid-x text-center align-center">

                <h3 id="plants" class="cell"> Plants </h3>

                <?php 

                require_once  $root . '/inc/products.php';
              
                foreach ($products["plants"] as $key => $product) { ?>

                    <div class="cell gallery">
                        <img alt="<?php echo $product ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                        <h4 class="subheader"><?php echo $product ?></h4>
                    </div>

                <?php } ?>
                
            </section>

            <section class="grid-x text-center align-center">
                
                <h3 id="pots" class="cell"> Pots </h3>

                <?php 

                require_once  $root . '/inc/products.php';
              
                foreach ($products["pots"] as $key => $product) { ?>

                    <div class="cell gallery">
                        <img alt="<?php echo $product ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                        <h4 class="subheader"><?php echo $product ?></h4>
                    </div>

                <?php } ?>
                
            </section>

            <section class="grid-x text-center align-center">
                
                <h3 id="gifts" class="cell"> Gifts </h3>

                <?php 

                require_once  $root . '/inc/products.php';
              
                foreach ($products["gifts"] as $key => $product) { ?>

                    <div class="cell gallery">
                        <img alt="<?php echo $product ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                        <h4 class="subheader"><?php echo $product ?></h4>
                    </div>

                <?php } ?>
                
            </section>

            <section class="grid-x text-center align-center">
                
                <h3 id="garden-tools" class="cell"> Garden Tools </h3>

                <?php 

                require_once  $root . '/inc/products.php';
              
                foreach ($products["garden_tools"] as $key => $product) { ?>

                    <div class="cell gallery">
                        <img alt="<?php echo $product ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                        <h4 class="subheader"><?php echo $product ?></h4>
                    </div>

                <?php } ?>
                
            </section>

            <section class="grid-x text-center align-center">
                
                <h3 id="fertilisers" class="cell"> Fertilisers </h3>

                <?php 

                require_once  $root . '/inc/products.php';
              
                foreach ($products["fertilisers"] as $key => $product) { ?>

                    <div class="cell gallery">
                        <img alt="<?php echo $product ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                        <h4 class="subheader"><?php echo $product ?></h4>
                    </div>

                <?php } ?>
                
            </section>

        </main>

        <footer class="grid-x grid-padding-x align-justify">

            <ul class="cell shrink align-self-middle no-bullet inline-list">
                <li>
                    <i class="fi-link"></i>
                    <ul class="vertical menu text-left">
                        <li><a href="./index.html">HOME</a></li>
                        <li><a href="./contact.php">CONTACT</a></li>
                        <li><a href="./gallery.php">GALLERY</a></li>
                        <li><a href="./video.html">VIDEO</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="cell no-bullet inline-list shrink
                align-self-middle text-center">
                <li>Georges Garden Shop</li>
                <li>&copy; D.C</li>
            </ul>

        </footer>

        <script src="js/vendor/jquery.js"></script>
        <script src="js/vendor/what-input.js"></script>
        <script src="js/vendor/foundation.min.js"></script>
        <script src="js/app.js"></script>
    </body>

</html>
