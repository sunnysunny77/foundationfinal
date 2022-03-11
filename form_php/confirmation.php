<!DOCTYPE html>
<html>
<body>

<?php

session_start();

if ($_POST["token"] === $_SESSION["token"]) {

function htmlout($x) {
    echo htmlspecialchars($x);
}

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

</body>
</html>