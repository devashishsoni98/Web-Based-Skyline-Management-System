<?php
require ("essentials.php");
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require ('links.php'); ?>
</head>

<body class="bg-light">
    <div class="conatiner-fluid bg-dark text-light p-3 d-flex justify-content-between align-items-center ">
        <h1 class="mb-0">Admin Panel</h1>
        <a href="logout.php" class="btn btn-light btn-sm"> LOG OUT</a>
    </div>



    <?php require ('scripts.php'); ?>
</body>

</html>