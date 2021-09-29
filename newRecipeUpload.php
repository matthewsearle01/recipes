<?php

require_once ('includes/dbconnection.php');
require_once ('includes/functions.php');

$valid = true;

if (!$valid) {
    header('Location: addEntry.php');
}

$recipeAdded = addNewRecipe($db, $_POST);

if ($recipeAdded) {
    header('Location: index.php');
} else {
    header('Location: addEntry.php');
}

