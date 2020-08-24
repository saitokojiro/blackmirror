<?php 

session_start();
if (empty($_SESSION['email']) && empty($_SESSION['password'])) {
    header("Location: /");
} else {
    session_destroy();
    header("Location: /");
}
?>