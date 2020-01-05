<?php
define("ROOT",dirname(__FILE__));

require_once ROOT.'/db.php';

echo "OK";

?>

<div class="add">
    <form method="post" action="store.php">
        <input name="name" placeholder="name" required><br>
        <input name="price" placeholder="price" required><br>
        <input name="qty" placeholder="qty" required><br>
        <button name="send" type="submit">send</button>
    </form>
</div>
