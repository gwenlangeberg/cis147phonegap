<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gweneverel8031
 * Date: 5/20/13
 * Time: 10:04 AM
 * To change this template use File | Settings | File Templates.
 */

$form = <<<END_OF_FORM

<form method=post action='purchase.php?'>

    Name: <input type='text' name='name'/><br />
    Address: <input type='address' name='address'/><br />
    <input type='submit' name='submit' value='Submit Order' />

</form>

END_OF_FORM;

echo json_encode($form);
