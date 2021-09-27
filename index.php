<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Your Kitchen | Recipe Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.svg"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <?php
        require_once ('includes/dbconnection.php');
        require_once ('includes/functions.php');
    ?>
</head>

<body>
<div class="title-menu">
    <div class="title">
        <img src="images/logo.png">
    </div>
    <div class="add-new">
        <a href="newEntry.php"><div class="button"><p>Add New Recipe</p></div></a>
    </div>
</div>
    <?php
    echo '<div class="main-section">';
    printAllRecipes();
    echo '</div>';
    ?>

</body>

</html>
