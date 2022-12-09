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

    $root = $_SERVER["DOCUMENT_ROOT"] . "/foundationfinal-main";

    require_once  $root . '/inc/products.php';

    ?>

</head>

<body>

    <a class="hide" href="#main" accesskey="S"> Skip navigation </a>

    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">

        <button aria-label="Menu" class="menu-icon" type="button" data-toggle="responsive-menu">

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
                   
                <li class="align-self-middle"><a accesskey="1" href="./index.html">HOME</a></li>
                <li class="align-self-middle"><a accesskey="2" href="./video.html">VIDEO</a></li>
                <li class="align-self-middle"><a accesskey="3" href="./gallery.php"><h1>GALLERY</h1></a></li>
                <li class="align-self-middle"><a accesskey="4" href="./quote.php">QUOTE</a></li>

            </ul>

        </nav>

    </header>

    <main id="main" class="grid-x align-center">

        <h2 class="cell text-center medium-text-right">Gallery</h2>

        <ul class="cell sticky-top grid-x text-center align-center menu">
            <li class="cell small-4 large-2"><a href="./gallery.php"><i class="fi-thumbnails"></i></a></li>
            <li class="cell small-4 large-2"><a class="subheader" href="#plants">Plants</a></li>
            <li class="cell small-4 large-2"><a class="subheader" href="#pots">Pots</a></li>
            <li class="cell small-4 large-2"><a class="subheader" href="#gifts">Gifts</a></li>
            <li class="cell small-4 large-2"><a class="subheader" href="#garden-tools">Garden tools</a></li>
            <li class="cell small-4 large-2"><a class="subheader" href="#fertilisers">Fertilisers</a></li>

        </ul>

        <section id="plants" class="grid-x cell text-center align-center">

            <h3 class="cell text-right"> Plants </h3> 

            <?php

            foreach ($products["plants"] as $key => $product) { ?>

                <div class="cell small-12 medium-6 large-4 grid-x  align-center  gallery">
                    <img alt="<?php echo $product[0] ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                    <h4 class="cell small-10 subheader cell"><?php echo $product[0] ?></h4>
                    <a class="cell small-12" data-toggle="<?php echo $key ?>">Details</a>
                    <div class="cell  small-10 medium-5 large-3 dropdown-pane" id="<?php echo $key ?>" data-position="bottom" data-alignment="center" data-dropdown>
                        <ul class="text-left inline-list no-bullet">
                            <li>
                                <b>Features:</b>
                                <ul>
                                    <li><?php echo $product[2] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Returns:</b>
                                <ul>
                                    <li><?php echo $product[3] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Price:</b>
                                <ul>
                                    <li>$<?php echo $product[1] ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php } ?>

        </section>

        <section id="pots" class="grid-x cell text-center align-center">

            <h3 class="cell text-right"> Pots </h3> 

            <?php

            foreach ($products["pots"] as $key => $product) { ?>

                <div class="cell small-12 medium-6 large-4 grid-x  align-center  gallery">
                    <img alt="<?php echo $product[0] ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                    <h4 class="cell small-10 subheader cell"><?php echo $product[0] ?></h4>
                    <a class="cell small-12" data-toggle="<?php echo $key ?>">Details</a>
                    <div class="cell  small-10 medium-5 large-3 dropdown-pane" id="<?php echo $key ?>" data-position="bottom" data-alignment="center" data-dropdown>
                        <ul class="text-left inline-list no-bullet">
                            <li>
                                <b>Features:</b>
                                <ul>
                                    <li><?php echo $product[2] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Returns:</b>
                                <ul>
                                    <li><?php echo $product[3] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Price:</b>
                                <ul>
                                    <li>$<?php echo $product[1] ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php } ?>

        </section>

        <section id="gifts" class="grid-x cell text-center align-center">

            <h3 class="cell text-right"> Gifts </h3> 

            <?php

            foreach ($products["gifts"] as $key => $product) { ?>

                <div class="cell small-12 medium-6 large-4 grid-x  align-center  gallery">
                    <img alt="<?php echo $product[0] ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                    <h4 class="cell small-10 subheader cell"><?php echo $product[0] ?></h4>
                    <a class="cell small-12" data-toggle="<?php echo $key ?>">Details</a>
                    <div class="cell  small-10 medium-5 large-3 dropdown-pane" id="<?php echo $key ?>" data-position="bottom" data-alignment="center" data-dropdown>
                        <ul class="text-left inline-list no-bullet">
                            <li>
                                <b>Features:</b>
                                <ul>
                                    <li><?php echo $product[2] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Returns:</b>
                                <ul>
                                    <li><?php echo $product[3] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Price:</b>
                                <ul>
                                    <li>$<?php echo $product[1] ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php } ?>

        </section>

        <section id="garden-tools" class="grid-x cell text-center align-center">

            <h3 class="cell text-right"> Garden Tools </h3> 

            <?php

            foreach ($products["garden-tools"] as $key => $product) { ?>

                <div class="cell small-12 medium-6 large-4 grid-x  align-center  gallery">
                    <img alt="<?php echo $product[0] ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                    <h4 class="cell small-10 subheader cell"><?php echo $product[0] ?></h4>
                    <a class="cell small-12" data-toggle="<?php echo $key ?>">Details</a>
                    <div class="cell  small-10 medium-5 large-3 dropdown-pane" id="<?php echo $key ?>" data-position="bottom" data-alignment="center" data-dropdown>
                        <ul class="text-left inline-list no-bullet">
                            <li>
                                <b>Features:</b>
                                <ul>
                                    <li><?php echo $product[2] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Returns:</b>
                                <ul>
                                    <li><?php echo $product[3] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Price:</b>
                                <ul>
                                    <li>$<?php echo $product[1] ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

            <?php } ?>

        </section>

        <section id="fertilisers" class="grid-x cell text-center align-center">

            <h3 class="cell text-right"> Fertilisers </h3> 

            <?php       

            foreach ($products["fertilisers"] as $key => $product) { ?>

                <div class="cell small-12 medium-6 large-4 grid-x  align-center  gallery">
                    <img alt="<?php echo $product[0] ?>" src="./images/gallery/<?php echo $key ?>.jpg">
                    <h4 class="cell small-10 subheader cell"><?php echo $product[0] ?></h4>
                    <a class="cell small-12" data-toggle="<?php echo $key ?>">Details</a>
                    <div class="cell  small-10 medium-5 large-3 dropdown-pane" id="<?php echo $key ?>" data-position="bottom" data-alignment="center" data-dropdown>
                        <ul class="text-left inline-list no-bullet">
                            <li>
                                <b>Features:</b>
                                <ul>
                                    <li><?php echo $product[2] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Returns:</b>
                                <ul>
                                    <li><?php echo $product[3] ?></li>
                                </ul>
                            </li>
                            <li>
                                <b>Price:</b>
                                <ul>
                                    <li>$<?php echo $product[1] ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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
                    <li><a href="./video.html">VIDEO</a></li>
                    <li><a href="./gallery.php">GALLERY</a></li>
                    <li><a href="./quote.php">QUOTE</a></li>
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