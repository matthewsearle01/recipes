<?php
require_once ('includes/dbconnection.php');
require_once ('includes/functions.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Your Kitchen | Recipe Collection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon.svg"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
</head>

<body>
<div class="title-menu">
    <div class="title">
        <a href="index.php"><img src="images/logo.png" alt="your kitchen logo"></a>
    </div>
</div>

<div class="form">
    <form method="post" action="newRecipeUpload.php">
        <h1 class="add-recipe-title">Add New Recipe</h1>
        <section>
            <h2>Name</h2>
            <p>
                <input type="text" id="name" name="name">
            </p>
        </section>
        <section>
            <h2>Cooking Time (mins)</h2>
            <p>
                <input type="number" steps="1" id="cooktime" name="cooktime">
            </p>
        </section>
        <section>
            <h2>Ingredients</h2>
            <p>
                <textarea id="ingredients" type="text" name="ingredients"></textarea>
            </p>
        </section>
        <section>
            <h2>Method</h2>
            <p>
                <textarea id="method" type="text" name="method"></textarea>
            </p>
        </section>
        <section>
            <h2>Image URL</h2>
            <p>
                <input type="url" id="image" name="imagelink">
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
