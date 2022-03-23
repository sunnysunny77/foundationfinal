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

<form class="grid-x align-center" method="post" action="./form_php/confirmation.php" id="form">

    <?php foreach ($_POST["product"] as $key => $product) { ?>

    <fieldset class="cell grid-x">
        <legend class="cell large-6" >Choose your quantity</legend>
        <label  class="cell large-6">
            <?php htmlout($products[$product]); ?>
            <input required name=" <?php htmlout($key); ?>" type="number" min="1" value="1">
        </label>
    </fieldset>

    <?php } ?>

    <label class="cell">Name
        <input autocomplete="on" maxlength="40" required name="name" type="text">
    </label>
    <label class="cell">Email
        <input autocomplete="on" required name="email" type="email">
    </label>
    <label class="cell">Phone
        <input autocomplete="on" required name="phone" type="tel" pattern="[+]?[0-9]{3,15}" data-tooltip title="Accepts +###############">
    </label>
    <label class="cell"> Comments
        <textarea name="comments"></textarea>
    </label>
    <input type="hidden" name="root" value="<?php echo $root ?>">
    <input type="hidden" name="token" value="<?php htmlout($_SESSION['token']); ?>">
    <input aria-label="Form submit" type="submit" class="button">

</form>

<?php } ?>