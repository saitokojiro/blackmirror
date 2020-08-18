<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <?php
require "./function.php";
$db = \DbConnection::getInstance();
var_dump()
/*
//require __DIR__ . '/model/DB.php';

$page = $_GET['page'] ?? 'home';
$page = basename($page, '.php');

$path = __DIR__ . '/view/' . $page . '.php';

var_dump($path);
if (is_file($path)) {
    require $path;
    var_dump($page);
} else {
    echo "error 404 : " . $page . " not exist";
}

*/
?>
    </div>
</body>

</html>