<?php

use App\user_management;

require_once __DIR__ . "/vendor/autoload.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <span>register</span>
    <form action='./index.php' method="post">
        <input type="email" name="remail" id="remail" placeholder="your email"> <br>
        <input type="password" name="rpwd" id="rpwd" placeholder="your password"><br>
        <input type="submit" value="register" id="send">
    </form>


    <span>login</span>
    <form action='./index.php' method="post">
        <input type="email" name="lemail" id="lemail" placeholder="your email"> <br>
        <input type="password" name="lpwd" id="lpwd" placeholder="your password"><br>
        <input type="submit" value="register" id="send">
    </form>

    <?php

//use App\DbConnection;

//$db = new DbConnection();
$user = new user_management();

//$user->loginDB($_POST['lemail'], $_POST['lpwd']);
$user->getUsers();

if ($_POST) {
    if (isset($_POST['remail']) && isset($_POST['rpwd'])) {
        $user->registerDB($_POST['remail'], $_POST['rpwd']);
    } else {

    }
    if (isset($_POST['lemail']) && isset($_POST['lpwd'])) {
        $user->loginDB($_POST['lemail'], $_POST['lpwd']);
    } else {

    }

}

if (empty($_SESSION['email']) && empty($_SESSION['password'])) {
    echo 'not connected';
} else {
    echo 'connected session';
}

?>

    <script defer>
    /*document.getElementById('send').addEventListener('click', function(e) {
        e.preventDefault();
    })*/
    </script>

</body>

</html>