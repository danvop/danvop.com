<?php

require('config.php');


if(!isset($_POST['password'])) : ?>

<form action="" method="post">
<label for="password">Enter Password</label>
<input id="password" type="password" name="password">
<input type="submit">
</form>
    
<?php 
die();
endif;

if(isset($_POST['password']) && $_POST['password'] !== PASS) {
    return header("Location: index.php");
}
//continue loading


