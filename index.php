<?php

    $x = 0;

    if (!@$_SESSION['x']) {
        $x = $_SESSION['x'] = $x;
    }
    $_SESSION['x']++;

    $x++;

    //setcookie('x', $x, time() + 5 );
    //echo time();
    echo $x;
?>

<form action="index.php" method="POST">
    <input type="hidden" value="<?=$x ?>" name="x"> 
    <input type="submit">

</form>