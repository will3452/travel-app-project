<?php 
     include_once '../../vendor/autoload.php';
     include_once 'process/LoginStatus.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Manager</title>
</head>
<body>
    <?php
        echo $_SESSION['manager'];
    ?>
    <a href="process/logout"><button>Logout</button></a>
</body>
</html>