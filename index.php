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
      <a href="index.php"><img src="images/logo.png" alt="Your Kitchen logo"></a>
    </div>
    <div class="add-new">
      <a href="addEntry.php"><div class="button">Add New Recipe</div></a>
    </div>
  </div>
  <?php
  echo '<div class="main-section">';
  printAllRecipes($db);
  echo '</div>';
  ?>
</body>

</html>
