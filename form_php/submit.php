<?php

session_start();

if ($_POST["token"] === $_SESSION["token"]) {

    $root = $_POST["root"];

    require_once  $root . '/inc/utilities.php';

    require_once  $root . '/inc/products.php';


?>

<div class="cell" >
    <span class="badge primary">1</span>
    <span class="badge primary">2</span>
    <span class="badge secondary">3</span>
</div>

<form class="grid-x" method="post" action="./form_php/confirmation.php" id="form">

    <?php if (!empty($_POST["plants"])) { ?>

        <fieldset class="cell grid-x">
            <legend class="cell">Plants quantity:</legend>

            <?php $_SESSION["plants"] = $_POST["plants"];

            foreach ($_POST["plants"] as $product) { ?>


                <label class="cell medium-4">
                    <?php htmlout($products["plants"]["$product"][0] . " ") ?> <b> <?php htmlout("$: " . $products["plants"]["$product"][1]); ?> </b>
                    <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                </label>


            <?php } ?>
        </fieldset>
    <?php } ?>

    <?php if (!empty($_POST["pots"])) { ?>

        <fieldset class="cell grid-x">
            <legend class="cell">Pots quantity:</legend>

            <?php $_SESSION["pots"] = $_POST["pots"];

            foreach ($_POST["pots"] as $product) { ?>

                <label class="cell medium-4">
                    <?php htmlout($products["pots"]["$product"][0] . " ") ?> <b> <?php htmlout("$: " . $products["pots"]["$product"][1]); ?> </b>
                    <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                </label>

            <?php } ?>
        </fieldset>
    <?php } ?>


    <?php if (!empty($_POST["gifts"])) {  ?>

        <fieldset class="cell grid-x">
            <legend class="cell">Gifts quantity:</legend>

            <?php $_SESSION["gifts"] = $_POST["gifts"];

            foreach ($_POST["gifts"] as $product) { ?>

                <label class="cell medium-4">
                    <?php htmlout($products["gifts"]["$product"][0] . " ") ?> <b> <?php htmlout("$: " . $products["gifts"]["$product"][1]); ?> </b>
                    <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                </label>

            <?php } ?>
        </fieldset>
    <?php } ?>

    <?php if (!empty($_POST["garden-tools"])) { ?>

        <fieldset class="cell grid-x">
            <legend class="cell">Garden tools quantity:</legend>

            <?php $_SESSION["garden-tools"] = $_POST["garden-tools"];

            foreach ($_POST["garden-tools"] as $product) { ?>

                <label class="cell medium-4">
                    <?php htmlout($products["garden-tools"]["$product"][0] . " ") ?> <b> <?php htmlout("$: " . $products["garden-tools"]["$product"][1]); ?> </b>
                    <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                </label>


            <?php } ?>
        </fieldset>
    <?php } ?>


    <?php if (!empty($_POST["fertilisers"])) { ?>

        <fieldset class="cell grid-x">
            <legend class="cell">Fertilisers quantity:</legend>

            <?php $_SESSION["fertilisers"] = $_POST["fertilisers"];

            foreach ($_POST["fertilisers"] as $product) { ?>

                <label class="cell medium-4">
                    <?php htmlout($products["fertilisers"]["$product"][0] . " ") ?> <b> <?php htmlout("$: " . $products["fertilisers"]["$product"][1]); ?> </b>
                    <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                </label>

            <?php } ?>
        </fieldset>
    <?php } ?>

    <label class="cell medium-4">
        Name
        <input autocomplete="on" maxlength="40" required name="name" type="text">
    </label>
    <label class="cell medium-4">
        email
        <input autocomplete="on" maxlength="40" required name="email" type="email">
    </label>
    <label for="phone" class="cell">
        Phone
    </label>
    <input id="phone" class="cell medium-6" autocomplete="on" required name="phone" type="tel" pattern="[+]?[0-9]{3,15}" title="Accepts +###############">
    <label class="cell"> Comments
        <textarea maxlength="1000" rows="8" name="comments"></textarea>
    </label>
    <input type="hidden" name="root" value="<?php echo $root ?>">
    <input type="hidden" name="token" value="<?php htmlout($_SESSION['token']); ?>">
    <label class="grid-x align-center cell">
        <span class="show-for-sr">Submit</span>
        <input name="action" type="submit" class="button" value="Order">
    </label>

</form>

<?php } ?>