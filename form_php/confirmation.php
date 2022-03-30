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
            
                foreach ($_SESSION["plants"] as $key => $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['plants'][$product]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$key]); ?> </td>
                        <td headers="category"> Plant </td>
                    </tr>
        
        <?php } 
        }?>
        
        <?php if(!empty($_SESSION["pots"])) {
            
                foreach ($_SESSION["pots"] as $key => $product) { ?>

                    <tr>
                        <td headers="product"> <?php htmlout($products['pots'][$product]); ?> </td>
                        <td headers="quantity"> <?php htmlout($_POST[$key]); ?> </td>
                        <td headers="category"> Pots </td>
                    </tr>
    
        <?php } 
        }?>

        </tbody>
    </table>
</section>

<?php } ?>