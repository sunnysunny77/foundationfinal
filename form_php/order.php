<!DOCTYPE html>
<html>
<body>

<?php

session_start();

$_SESSION['token'] = md5(uniqid(rand(), TRUE));

function htmlout($x) {
    echo htmlspecialchars($x);
}

$products = [
    'product-1' => 'Smyka',
    'product-2' => 'Hard Wood Mulch',
    'product-3' => 'Tuff Turf',
    'product-4' => 'Pine Bark Mulch',
    'product-5' => 'Pinegro',
    'product-6' => 'Gardenia augusta',
    'product-7' => 'Rhododendron',
    'product-8' => 'Camellia Japonica',
    'product-9' => 'Azalea Encore',
    'product-10' => 'Rustic Windmill',
    'product-11' => 'X5 Axe',
    'product-12' => 'Birds Garden Setting',
    'product-13' => 'Ozito PXC',
    'product-14' => 'Seasol 2',
    'product-15' => 'Scotts Lawn Builder',
    'product-16' => 'Seedling Tray',
    'product-17' => 'Plant Grow Light',
    'product-18' => 'Fiskars Garden Scissors',
    'product-19' => 'Water Filled Roller',
    'product-20' => 'Garden Fork',
];

?>

<span class="badge primary">1</span>
<span class="badge secondary">2</span>
<span class="badge secondary">3</span>

<form class="grid-x align-center" method="post" action="./form_php/submit.php" id="form">
    <label class="cell">Purchase one or more products to proceed
        <select required size="10" name="product[]" multiple>
        <?php
        
            foreach ( $products as $key => $product) {

                ?>
                <option value="<?php htmlout($key); ?>" ><?php htmlout($product); ?></option>
                <?php

            }

        ?>
        </select>
    </label>
    <input type="hidden" name="token" value="<?php htmlout($_SESSION['token']); ?>">
    <input type="submit" class="button">
</form>

</body>
</html>