<?php

session_start();

function htmlout($x) {
    echo htmlspecialchars($x);
}

if (!isset($_POST["action"])) {  

?>

    <span class="badge primary text-right">1</span>
    <span class="badge secondary">2</span>
    <span class="badge secondary">3</span>

    <form class="grid-x align-center" method="post" action="?">
        <label class="cell">Purchase one or more products to proceed
            <select required size="10" name="product[]" multiple>
                <option value="product-1">Product-1</option>
                <option value="product-2">Product-2</option>
                <option value="product-3">Product-3</option>
                <option value="product-4">Product-4</option>
                <option value="product-5">Product-5</option>
                <option value="product-6">Product-6</option>
                <option value="product-7">Product-7</option>
                <option value="product-8">Product-8</option>
                <option value="product-9">Product-9</option>
                <option value="product-10">Product-10</option>
                <option value="product-11">Product-11</option>
                <option value="product-12">Product-12</option>
                <option value="product-13">Product-13</option>
                <option value="product-14">Product-14</option>
                <option value="product-15">Product-15</option>
                <option value="product-16">Product-16</option>
                <option value="product-17">Product-17</option>
                <option value="product-18">Product-18</option>
                <option value="product-19">Product-19</option>
                <option value="product-20">Product-20</option>
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
        <label class="cell">email
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
                    <td headers="product"> <?php htmlout($product); ?> </td>
                    <td headers="quantity"> <?php htmlout($_POST[$key]); ?> </td>
                </tr>
            
            <?php } ?>

            </tbody>
        </table>
    </section>

<?php } ?>