<?php

require_once ('includes/dbconnection.php');
require_once ('includes/functions.php');

$recipeAdded = addNewRecipe($db, $_POST);

if ($recipeAdded) {
    header('Location: index.php');
} else {
    header('Location: addEntry.php');
}

