<?php

session_start();

if ($_POST["token"] === $_SESSION["token"]) {
    
$root = $_POST["root"]; 

require_once  $root . '/inc/utilities.php';

require_once  $root . '/inc/products.php';

$total;

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
                <th id="category">Category</th>
                <td id="price"> Price </td>
            </tr>
            </tr>
        </thead>
        <tbody>

        <?php if(!empty($_SESSION["plants"])) {
            
                foreach ($_SESSION["plants"] as $product) { 
                    $item_price = $products['plants']["$product"][1];
                    $quantity_price = $_POST[$product];
                    $price = $item_price * $quantity_price;
                    $total += $price;
                    ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['plants']["$product"][0]); ?> </td>
                        <td headers="quantity"> <?php htmlout($quantity_price); ?> </td>
                        <td headers="category"> Plant </td>
                        <td headers="price"> <?php htmlout("$" . $item_price . " x " . $quantity_price . " = $" . $price); ?> </td>
                    </tr>
        
        <?php } 
        }?>
        
        <?php if(!empty($_SESSION["pots"])) {
            
                foreach ($_SESSION["pots"] as $product) { 
                    $item_price = $products['pots']["$product"][1];
                    $quantity_price = $_POST[$product];
                    $price = $item_price * $quantity_price;
                    $total += $price;
                    ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['pots']["$product"][0]); ?> </td>
                        <td headers="quantity"> <?php htmlout($quantity_price); ?> </td>
                        <td headers="category"> Pots </td>
                        <td headers="price"> <?php htmlout("$" . $item_price . " x " . $quantity_price . " = $" . $price); ?> </td>
                    </tr>
    
        <?php } 
        }?>

        <?php if(!empty($_SESSION["gifts"])) {
            
                foreach ($_SESSION["gifts"] as $product) {   
                    $item_price = $products['gifts']["$product"][1];
                    $quantity_price = $_POST[$product];
                    $price = $item_price * $quantity_price;
                    $total += $price;
                    ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['gifts']["$product"][0]); ?> </td>
                        <td headers="quantity"> <?php htmlout($quantity_price); ?> </td>
                        <td headers="category"> Gift </td>
                        <td headers="price"> <?php htmlout("$" . $item_price . " x " . $quantity_price . " = $" . $price); ?> </td>
                    </tr>

        <?php } 
        }?>

        <?php if(!empty($_SESSION["garden-tools"])) {
                
                foreach ($_SESSION["garden-tools"] as $product) {   
                    $item_price = $products['garden-tools']["$product"][1];
                    $quantity_price = $_POST[$product];
                    $price = $item_price * $quantity_price;
                    $total += $price;
                    ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['garden-tools']["$product"][0]); ?> </td>
                        <td headers="quantity"> <?php htmlout($quantity_price); ?> </td>
                        <td headers="category"> Garden tool </td>
                        <td headers="price"> <?php htmlout("$" . $item_price . " x " . $quantity_price . " = $" . $price); ?> </td>
                    </tr>

        <?php } 
        }?>

        <?php if(!empty($_SESSION["fertilisers"])) {
                
                foreach ($_SESSION["fertilisers"] as $product) { 
                    $item_price = $products['fertilisers']["$product"][1];
                    $quantity_price = $_POST[$product];
                    $price = $item_price * $quantity_price;
                    $total += $price;
                    ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['fertilisers']["$product"][0]); ?> </td>
                        <td headers="quantity"> <?php htmlout($quantity_price); ?> </td>
                        <td headers="category"> Fertiliser </td>
                        <td headers="price"> <?php htmlout("$" . $item_price . " x " . $quantity_price . " = $" . $price); ?> </td>
                    </tr>

        <?php } 
        }?>

        </tbody>
    </table>

    <p> Total: $<?php htmlout($total); ?>  </p>

</section>

<?php }
unset($_SESSION["plants"]);
unset($_SESSION["pots"]);
unset($_SESSION["gifts"]);
unset($_SESSION["garden-tools"]);
unset($_SESSION["fertilisers"]);
?>