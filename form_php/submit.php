<?php

session_start();

if ($_POST["token"] === $_SESSION["token"]) {

    $root = $_POST["root"];

    require_once  $root . '/inc/utilities.php';

    require_once  $root . '/inc/products.php';

    $_SESSION["product"] = $_POST["product"];

?>

    <span class="badge primary">1</span>
    <span class="badge primary">2</span>
    <span class="badge secondary">3</span>

    <form class="grid-x" method="post" action="./form_php/confirmation.php" id="form">

        <?php foreach ($_POST["product"] as $key => $product) { ?>

            <fieldset class="cell grid-x">
                <legend class="cell">Choose your quantity</legend>
                <label class="cell medium-3">
                    <?php htmlout($products[$product]); ?>
                    <input required name=" <?php htmlout($key); ?>" type="number" min="1" value="1">
                </label>
            </fieldset>

        <?php } ?>

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