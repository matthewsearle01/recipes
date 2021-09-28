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
        <a href="index.php"><img src="images/logo.png"></a>
    </div>
</div>

<div class="form">
    <form method="post" action="newrecipe.php">
        <h1 class="add-recipe-title">Add New Recipe</h1>
        <section>
            <h2>Name</h2>
            <p>
                <input type="text" id="name" name="name">
            </p>
        </section>
        <section>
            <h2>Cooking Time</h2>
            <p>
                <input type="text" id="cooktime" name="cooktime">
            </p>
        </section>
        <section>
            <h2>Ingredients</h2>
            <p>
                <textarea id="ingredients" name="ingredients" aria-label="Ingredients"></textarea>
            </p>
        </section>
        <section>
            <h2>Method</h2>
            <p>
                <textarea id="method" name="method" aria-label="Method"></textarea>
            </p>
        </section>
        <section>
            <h2>Image URL</h2>
            <p>
                <input type="text" id="image" name="imagelink">
            </p>
        </section>
        <div class="form-buttons">
            <p><button type="reset">Reset</button></p>
            <p><button type="submit">Add</button></p>
        </div>
    </form>
</div>

</body>

</html>
