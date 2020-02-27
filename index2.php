<?php

session_start();

$user = [
    "email" => "test@t.hu",
    "password" => "123",
    "name" => "Joker"
];

    if ($_POST['email'] == $user['email'] && $_POST['password'] == $user['password'] ) {
        $_SESSION['name'] = $user['name'];
    }

    if (@$_GET['exit']) {
        # code...
        session_destroy();
    }

?>

<?php if(@$_SESSION['name']): ?>
    Helló <?= $_SESSION['name'] ?>
    <a href="index.php?exit=1">Logout</a>
<?php else: ?>

<form action="index2.php" method="POST">
    <input type="email" name="email"> 
    <input type="password" name="password">
    <input type="submit">
</form>
<?php endif ?>