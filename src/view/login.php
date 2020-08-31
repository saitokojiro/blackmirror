<span>register</span>
<form action='/login' method="post">
    <input type="email" name="remail" id="remail" placeholder="your email"> <br>
    <input type="password" name="rpwd" id="rpwd" placeholder="your password"><br>
    <input type="submit" value="register" id="sendr">
</form>


<span>login</span>
<form action='/login' method="post">
    <input type="email" name="lemail" id="lemail" placeholder="your email"> <br>
    <input type="password" name="lpwd" id="lpwd" placeholder="your password"><br>
    <input type="submit" value="login" id="send">
</form>
<?php

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

    header("Location: /home");
}

?>