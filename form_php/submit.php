<?php

session_start();

if ($_POST["token"] === $_SESSION["token"]) {

    $root = $_POST["root"];

    require_once  $root . '/inc/utilities.php';

    require_once  $root . '/inc/products.php';


?>

    <span class="badge primary">1</span>
    <span class="badge primary">2</span>
    <span class="badge secondary">3</span>

    <form class="grid-x" method="post" action="./form_php/confirmation.php" id="form">

        <?php if(!empty($_POST["plants"])) { 

            $_SESSION["plants"] = $_POST["plants"];

            foreach ($_POST["plants"] as $product) { ?>

                <fieldset class="cell grid-x">
                    <legend class="cell">Choose your quantity</legend>
                    <label class="cell medium-3"> Plant:
                        <p><?php htmlout($products["plants"]["$product"][0] . " ") ?></p> <b>  <?php htmlout( "$: " . $products["plants"]["$product"][1]); ?> </b>
                        <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                    </label>
                </fieldset>

        <?php } 
        } ?>

        <?php if(!empty($_POST["pots"])) {
            
            $_SESSION["pots"] = $_POST["pots"];

            foreach ($_POST["pots"] as $product) { ?>

                <fieldset class="cell grid-x">
                    <legend class="cell">Choose your quantity</legend>
                    <label class="cell medium-3"> Pot:
                    <p><?php htmlout($products["pots"]["$product"][0] . " ") ?></p> <b>  <?php htmlout( "$: " . $products["pots"]["$product"][1]); ?> </b>
                    <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                    </label>
                </fieldset>

        <?php } 
        } ?>


        <?php if(!empty($_POST["gifts"])) {
            
            $_SESSION["gifts"] = $_POST["gifts"];

            foreach ($_POST["gifts"] as $product) { ?>

                <fieldset class="cell grid-x">
                    <legend class="cell">Choose your quantity</legend>
                    <label class="cell medium-3"> Gift:
                        <p><?php htmlout($products["gifts"]["$product"][0] . " ") ?></p> <b>  <?php htmlout( "$: " . $products["gifts"]["$product"][1]); ?> </b>
                        <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                    </label>
                </fieldset>

        <?php } 
        } ?>

        <?php if(!empty($_POST["garden_tools"])) {
            
            $_SESSION["garden_tools"] = $_POST["garden_tools"];

            foreach ($_POST["garden_tools"] as $product) { ?>

                <fieldset class="cell grid-x">
                    <legend class="cell">Choose your quantity</legend>
                    <label class="cell medium-3"> Garden tool:
                        <p><?php htmlout($products["garden_tools"]["$product"][0] . " ") ?></p> <b>  <?php htmlout( "$: " . $products["garden_tools"]["$product"][1]); ?> </b>
                        <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                    </label>
                </fieldset>

        <?php } 
        } ?>

        <?php if(!empty($_POST["fertilisers"])) {
            
            $_SESSION["fertilisers"] = $_POST["fertilisers"];

            foreach ($_POST["fertilisers"] as $product) { ?>

                <fieldset class="cell grid-x">
                    <legend class="cell">Choose your quantity</legend>
                    <label class="cell medium-3"> Fertiliser:
                        <p><?php htmlout($products["fertilisers"]["$product"][0] . " ") ?></p> <b>  <?php htmlout( "$: " . $products["fertilisers"]["$product"][1]); ?> </b>
                      <input required name="<?php htmlout($product); ?>" type="number" min="1" value="1">
                    </label>
                </fieldset>

        <?php } 
        } ?>

        <label class="cell medium-3">
            Name
            <input autocomplete="on" maxlength="40" required name="name" type="text">
        </label>
        <label class="cell medium-3">
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