<?php

session_start();

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

if (!isset($_POST["action"])) {  

?>

    <span class="badge primary text-right">1</span>
    <span class="badge secondary">2</span>
    <span class="badge secondary">3</span>

    <form class="grid-x align-center" method="post" action="?">
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
        <input name="action" type="submit" class="button" value="Submit">
    </form>

<?php

}

if (isset($_POST["action"]) && $_POST["action"] == "Submit") {

    $_SESSION["product"] = $_POST["product"];

?>

    <span class="badge primary">1</span>
    <span class="badge primary">2</span>
    <span class="badge secondary">3</span>

    <form class="grid-x align-center" method="post" action="?">

        <?php foreach ($_POST["product"] as $key => $product) { ?>

        <fieldset class="cell grid-x">
            <legend class="cell large-6" >Choose your quantity</legend>
            <label  class="cell large-6">
                <?php htmlout($product); ?>
                <input required name=" <?php htmlout($key); ?>" type="number" min="1" value="1">
            </label>
        </fieldset>

        <?php } ?>

        <label class="cell">Name
            <input required name="name" type="text">
        </label>
        <label class="cell">Email
            <input required name="email" type="email">
        </label>
        <label class="cell">Phone
            <input required name="phone" type="tel">
        </label>
        <label class="cell"> Comments
            <textarea name="comments"></textarea>
        </label>
        <input name="action" type="submit" class="button" value="Order">

    </form>

<?php

}

if (isset($_POST["action"]) && $_POST["action"] == "Order") {

?>
    <span class="badge primary">1</span>
    <span class="badge primary">2</span>
    <span class="badge primary">3</span>

    <section class="callout">

        <h3>Order</h3>

        <p>

            Name:
            <?php htmlout($_POST['name']); ?>
            <br />
            Email:
            <?php htmlout($_POST['email']); ?>
            <br />
            Phone:
            <?php htmlout($_POST['phone']); ?>
            <br />
            Comments:
            <?php htmlout($_POST['comments']); ?>
            
        </p>

        <table>
            <thead>
                <tr>
                    <th id="product">Product</th>
                    <th id="quantity">Quantity</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($_SESSION["product"] as $key => $product) { ?>

                <tr>
                    <td headers="product"> <?php htmlout($products[$product]); ?> </td>
                    <td headers="quantity"> <?php htmlout($_POST[$key]); ?> </td>
                </tr>
            
            <?php } ?>

            </tbody>
        </table>
    </section>

<?php } ?>