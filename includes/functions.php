<?php

require_once ('dbconnection.php');

function getData($db)
{
    // PDO QUERY
    $query = $db->prepare('SELECT * FROM recipe_data');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function getRecipeName(int $id, $db)
{
    $result = getData($db);
    echo '<h1>';
    echo $result[$id]['name'];
    echo '</h1>';
    echo '<h3><br>Cooktime: ' . $result[$id]['cooktime'] . ' mins</h3>';
}

function getIngredients(int $id, $db) {
    $result = getData($db);
    $ingredients = explode('|', $result[$id]['ingredients']);
    // iterate through returned data and print as un-ordered list
        echo '<h4>Ingredients</h4>';
        echo '<ul>';
        foreach ($ingredients as $item) {
            echo '<li>';
            echo $item;
            echo '</li>';
        }
        echo '</ul>';
    }

function getMethod(int $id, $db) {
    $result = getData($db);
    $method = explode('|', $result[$id]['method']);
    // iterate through returned data and print as ordered list
    echo '<h4>Method</h4>';
    echo '<ol>';
    foreach ($method as $item) {
        echo '<li>';
        echo $item;
        echo '</li>';
    }
    echo '</ol>';
}

function getImage(int $id, $db)
{
    $result = getData($db);
    $image = $result[$id]['imagelink'];
    echo '<img src="';
    echo $image;
    echo '" alt="picture of the meal">';
}

function printAllRecipes($db)
{
    $result = getData($db);
    for ($i = 0; $i < sizeof($result); $i++) {
        echo '<div class="recipe-card">';
        getImage($i, $db);
        getRecipeName($i, $db);
        getIngredients($i, $db);
        getMethod($i, $db);
        echo '</div>';
    }
}