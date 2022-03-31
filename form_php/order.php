<?php

require_once  $root . '/inc/utilities.php';

require_once  $root . '/inc/products.php';

session_start();

$_SESSION['token'] = md5(uniqid(rand(), TRUE));

?>

<span class="badge primary">1</span>
<span class="badge secondary">2</span>
<span class="badge secondary">3</span>

<form class="grid-x" method="post" action="./form_php/submit.php" id="form">
    <fieldset class="cell">
        <legend id="form-msg">Purchase one or more products to proceed</legend>

        <ul class="tabs grid-x text-center align-center" data-tabs id="tabs">
            <li class="cell small-4 medium-2"> <i class="fi-widget"></i></li>
            <li class="cell small-4 medium-2 tabs-title is-active"><a href="#panel1" aria-selected="true">Plants</a></li>
            <li class="cell small-4 medium-2 tabs-title"><a data-tabs-target="panel2" href="#panel2">Pots</a></li>
            <li class="cell small-4 medium-2 tabs-title"><a data-tabs-target="panel3" href="#panel3">Gifts</a></li>
            <li class="cell small-4 medium-2 tabs-title"><a data-tabs-target="panel4" href="#panel4">Garden tools</a></li>
            <li class="cell small-4 medium-2 tabs-title"><a data-tabs-target="panel5" href="#panel5">Fertilisers</a></li>
        </ul>

        
        <div class="tabs-content" data-tabs-content="tabs">

            <div class="tabs-panel is-active" id="panel1">

                <label>Plants
                    <select size="6" name="plants[]" multiple data-trigger-class data-tooltip data-position="bottom" data-alignment="left" data-h-offset="15" title="Cmd or Ctrl">
                        <?php

                        foreach ($products['plants'] as $key => $product) {

                        ?>
                            <option value="<?php htmlout($key); ?>"><?php htmlout($product[0]); ?></option>
                        <?php

                        }

                        ?>
                    </select>
                </label>

            </div>

            <div class="tabs-panel" id="panel2">

                <label>Pots
                    <select size="6" name="pots[]" multiple data-trigger-class data-tooltip data-position="bottom" data-alignment="left" data-h-offset="15" title="Cmd or Ctrl">
                        <?php

                        foreach ($products['pots'] as $key => $product) {

                        ?>
                            <option value="<?php htmlout($key); ?>"><?php htmlout($product[0]); ?></option>
                        <?php

                        }

                        ?>
                    </select>
                </label>

            </div>

            <div class="tabs-panel" id="panel3">

                <label>Gifts
                    <select size="6" name="gifts[]" multiple data-trigger-class data-tooltip data-position="bottom" data-alignment="left" data-h-offset="15" title="Cmd or Ctrl">
                        <?php

                        foreach ($products['gifts'] as $key => $product) {

                        ?>
                            <option value="<?php htmlout($key); ?>"><?php htmlout($product[0]); ?></option>
                        <?php

                        }

                        ?>
                    </select>
                </label>

            </div>

            <div class="tabs-panel" id="panel4">

                <label>Garden tools
                    <select size="6" name="garden_tools[]" multiple data-trigger-class data-tooltip data-position="bottom" data-alignment="left" data-h-offset="15" title="Cmd or Ctrl">
                        <?php

                        foreach ($products['garden_tools'] as $key => $product) {

                        ?>
                            <option value="<?php htmlout($key); ?>"><?php htmlout($product[0]); ?></option>
                        <?php

                        }

                        ?>
                    </select>
                </label>

            </div>

            <div class="tabs-panel" id="panel5">

                <label>Fertilisers
                    <select size="6" name="fertilisers[]" multiple data-trigger-class data-tooltip data-position="bottom" data-alignment="left" data-h-offset="15" title="Cmd or Ctrl">
                        <?php

                        foreach ($products['fertilisers'] as $key => $product) {

                        ?>
                            <option value="<?php htmlout($key); ?>"><?php htmlout($product[0]); ?></option>
                        <?php

                        }

                        ?>
                    </select>
                </label>

            </div>

        </div>

    </fieldset>
    <input type="hidden" name="root" value="<?php echo $root; ?>">
    <input type="hidden" name="token" value="<?php htmlout($_SESSION['token']); ?>">
    <label class="grid-x align-center cell">
        <span class="show-for-sr">Submit</span>
        <input id="sub" name="action" type="submit" class="button" value="Submit">
    </label>
</form>