<?php

function getRecipeCount($db) {
    // PDO QUERY
    $query = $db->prepare('SELECT * FROM recipe_data');
    $query->execute();
    $result = $query->fetchAll();
    return sizeof($result);
}

function getRecipeName(int $id, $db) {
    $idArray = [];
    array_push($idArray, $id);
    // PDO QUERY
    $query = $db->prepare('SELECT name, cooktime FROM recipe_data WHERE id=?');
    $query->execute($idArray);
    $result = $query->fetchAll();
    foreach ($result as $name) {
        echo '<h1>';
        echo $name['name'];
        echo '</h1>';
        echo '<h3><br>Cooktime: ' . $name['cooktime'] . ' mins</h3>';
    }
}

function getIngredients(int $id, $db) {
    $idArray = [];
    array_push($idArray, $id);
    // PDO QUERY
    $query = $db->prepare('SELECT ingredients FROM recipe_data WHERE id=?');
    $query->execute($idArray);
    $result = $query->fetchAll();
    // iterate through returned data and print as un-ordered list
    foreach ($result as $dish) {
        echo '<h4>Ingredients</h4>';
        echo '<ul>';
        foreach ($dish as $items) {
            $items = explode('|', $items);
            foreach ($items as $item) {
                echo '<li>';
                echo $item;
                echo '</li>';
            }
        };
        echo '</ul>';
    }
}

function getMethod(int $id, $db) {
    $idArray = [];
    array_push($idArray, $id);
    // PDO QUERY
    $query = $db->prepare('SELECT method FROM recipe_data WHERE id=?');
    $query->execute($idArray);
    $result = $query->fetchAll();
    // iterate through returned data and print as ordered list
    foreach ($result as $dish) {
        echo '<h4>Method</h4>';
        echo '<ol>';
        foreach ($dish as $items) {
            $items = explode('|', $items);
            foreach ($items as $item) {
                echo '<li>';
                echo $item;
                echo '</li>';
            }
        };
        echo '</ol>';
    }
}

function getImage(int $id, $db)
{
    $idArray = [];
    array_push($idArray, $id);
    // PDO QUERY
    $query = $db->prepare('SELECT imagelink FROM recipe_data WHERE id=?');
    $query->execute($idArray);
    $result = $query->fetchAll();
    foreach ($result as $image) {
        echo '<img src="';
        echo $image['imagelink'];
        echo '" alt="picture of the meal">';
    };
}

function printAllRecipes($db) {
    $howMany = getRecipeCount($db);
    for ($i = 1; $i <= $howMany; $i++) {
        echo '<div class="recipe-card">';
        getImage($i, $db);
        getRecipeName($i, $db);
        getIngredients($i, $db);
        getMethod($i, $db);
        echo '</div>';
    }
}

function printRecipe(int $id, $db) {
    echo '<div class="recipe-card">';
    getImage($id);
    getRecipeName($id);
    getIngredients($id);
    getMethod($id);
    echo '</div>';
    };


