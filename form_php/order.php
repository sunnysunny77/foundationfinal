<?php

require_once  $root . '/inc/utilities.php';

require_once  $root . '/inc/products.php';

session_start();

$_SESSION['token'] = md5(uniqid(rand(), TRUE));

?>

<span class="badge primary">1</span>
<span class="badge secondary">2</span>
<span class="badge secondary">3</span>

<form class="grid-x align-center" method="post" action="./form_php/submit.php" id="form">
    <label class="cell">Purchase one or more products to proceed
        <select required size="10" name="product[]" multiple data-tooltip data-position="top" data-alignment="right" data-h-offset="30" title="Cmd or Crl">
        <?php
        
            foreach ( $products as $key => $product) {

                ?>
                <option value="<?php htmlout($key); ?>" ><?php htmlout($product); ?></option>
                <?php

            }

        ?>
        </select>
    </label>
    <input type="hidden" name="root" value="<?php echo $root; ?>">
    <input type="hidden" name="token" value="<?php htmlout($_SESSION['token']); ?>">
    <input aria-label="Form submit" type="submit" class="button">
</form>