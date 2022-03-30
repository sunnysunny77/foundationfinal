<?php

session_start();

if ($_POST["token"] === $_SESSION["token"]) {
    
$root = $_POST["root"]; 

require_once  $root . '/inc/utilities.php';

require_once  $root . '/inc/products.php';

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
            </tr>
            </tr>
        </thead>
        <tbody>

        <?php if(!empty($_SESSION["plants"])) {
            
                foreach ($_SESSION["plants"] as $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['plants']["$product"]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$product]); ?> </td>
                        <td headers="category"> Plant </td>
                    </tr>
        
        <?php } 
        }?>
        
        <?php if(!empty($_SESSION["pots"])) {
            
                foreach ($_SESSION["pots"] as $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['pots']["$product"]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$product]); ?> </td>
                        <td headers="category"> Pots </td>
                    </tr>
    
        <?php } 
        }?>

        <?php if(!empty($_SESSION["gifts"])) {
            
                foreach ($_SESSION["gifts"] as $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['gifts']["$product"]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$product]); ?> </td>
                        <td headers="category"> Gift </td>
                    </tr>

        <?php } 
        }?>

        <?php if(!empty($_SESSION["garden_tools"])) {
                
                foreach ($_SESSION["garden_tools"] as $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['garden_tools']["$product"]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$product]); ?> </td>
                        <td headers="category"> Garden tool </td>
                    </tr>

        <?php } 
        }?>

        <?php if(!empty($_SESSION["fertilisers"])) {
                
                foreach ($_SESSION["fertilisers"] as $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['fertilisers']["$product"]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$product]); ?> </td>
                        <td headers="category"> Fertiliser </td>
                    </tr>

        <?php } 
        }?>

        </tbody>
    </table>
</section>

<?php }
unset($_SESSION["plants"]);
unset($_SESSION["pots"]);
unset($_SESSION["gifts"]);
unset($_SESSION["garden_tools"]);
unset($_SESSION["fertilisers"]);
?>