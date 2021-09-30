<?php

require_once ('includes/dbconnection.php');
require_once ('includes/functions.php');

deleteRecipe($db, $_POST);

header('Location: index.php');


