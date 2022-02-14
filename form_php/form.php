<?php

session_start();

if (!isset($_POST["action"])) {

    echo '
    <span class="badge primary text-right">1</span>
    <span class="badge secondary">2</span>
    <span class="badge secondary">3</span>
    <form method="post" action="?">
                <label>Purchase one or more products to proceed
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
                <div class="grid-x align-center input-group">
                    <div class="input-group-button">
                        <input name="action" type="submit" class="button" value="Submit">
                    </div>
                </div>
            </form>';
}

if (isset($_POST["action"]) && $_POST["action"] == "Submit") {

    $_SESSION["product"] = $_POST["product"];
    echo "<span class=\"badge primary\">1</span>
        <span class=\"badge primary\">2</span>
        <span class=\"badge secondary\">3</span>";
        echo "<form method=\"post\" action=\"?\">";
    foreach ($_POST["product"] as $key => $product) {
        echo "
        <div class=\"grid-x\">
                <fieldset class=\"large-5 cell\">
                <legend>Choose your quantity</legend>
                    <div class=\"medium-6 cell\">
                        <label>
                        $product 
                        <input required name=\"$key\" type=\"number\" min=\"1\" value=\"1\">
                        </label>
                    </div>
                </fieldset> 
        </div>";
    }

    echo '<div class="medium-6 cell">
            <label>Name
              <input required name="name" type="text">
            </label>
          </div>
          <div class="medium-6 cell">
            <label>email
                <input required name="email" type="email" >
            </label>
        </div>
         <div class="medium-6 cell">
            <label>Phone
                <input required name="phone" type="tel" >
            </label>
        </div>
        <label>
            Comments
        <textarea name="comments"></textarea>
        </label>
        <div class="grid-x align-center input-group">
            <div class="input-group-button">
                <input name="action" type="submit" class="button" value="Order">
            </div>
        </div>
</form>';
}

if (isset($_POST["action"]) && $_POST["action"] == "Order") {

    echo "
    <span class=\"badge primary\">1</span>
    <span class=\"badge primary\">2</span>
    <span class=\"badge primary\">3</span>
    <section class=\"callout\">

    <h3>Order</h3>

    <p>

    Name: 
    {$_POST['name']}
    <br/>
    Email: 
    {$_POST['email']}
    <br/>
    Phone: 
    {$_POST['phone']}
    <br/>
    Comments: 
    {$_POST['comments']}

    </p>
    <table>
    <thead>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
      </tr>
    </thead>
    <tbody>";

    foreach ($_SESSION["product"] as $key => $product) {

        echo " <tr>
            <td>$product</td>
            <td>$_POST[$key]</td>
        </tr>";
    }

    echo "</tbody>
    </table>
  </section>";
}
