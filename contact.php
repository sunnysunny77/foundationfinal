<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Georges Garden Shop - Contact</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/icons/foundation-icons.css">
    <link rel="stylesheet" href="css/contact.css">

    <?php

        $root = $_SERVER["DOCUMENT_ROOT"] . "/foundationfinal-main";

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

            <ul class="cell text-center vertical medium-horizontal dropdown menu" data-dropdown-menu>

                <li class="align-self-middle"><a accesskey="1" href="./index.html">HOME</a></li>
                <li class="align-self-middle"><a accesskey="2" href="./video.html">VIDEO</a></li>
                <li class="align-self-middle"><a accesskey="3" href="./gallery.php">GALLERY</a></li>
                <li class="align-self-middle"><a accesskey="4" href="./contact.php"><h1>CONTACT</h1></a></li>

            </ul>

        </nav>

    </header>

    <main id="main" class="grid-container grid-y">

        <h2 class="cell text-center medium-text-right">Contact us</h2>

        <i class="fi-clipboard"></i>

        <p class="text-center">
            <a class="subheader" href="mailto:example@example.com">example@example.com</a>
            <br>
            <a class="subheader" href="tel:0412620989">0412620989</a>     
            <br>
            <a download class="subheader" href="vcard.vcf">Download Contact</a>
            <br>
            Order products online and get a quote
        </p>


        <div id="response" role="region" aria-label="Dynamic progress form" >

            <?php require_once "./form_php/order.php"; ?>

        </div>

        <div class="grid-x align-center text-center">
            <blockquote class="cell small-10 medium-6">
                A garden is a grand teacher. It teaches patience and careful watchfulness;
                it teaches industry and thrift; above all it teaches entire trust.
                <cite>Gertrude Jekyll</cite>
            </blockquote>
        </div>

    </main>

    <footer class="grid-x grid-padding-x align-justify">

        <ul class="cell shrink align-self-middle no-bullet inline-list">
            <li>
                <i class="fi-link"></i>
                <ul class="vertical menu text-left">
                    <li><a href="./index.html">HOME</a></li>
                    <li><a href="./video.html">VIDEO</a></li>
                    <li><a href="./gallery.php">GALLERY</a></li>
                    <li><a href="./contact.php">CONTACT</a></li>
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
    <script src="js/form.js"></script>
</body>

</html>