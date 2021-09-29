<?php

function getData($db)
{
    // PDO QUERY
    $query = $db->prepare('SELECT id, name, ingredients, method, cooktime, imagelink FROM recipe_data');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function formatRecipeName(array $row) : string
{
    $str = '<h1>';
    $str .= $row['name'];
    $str .= '</h1>';
    $str .= '<h3>Cooktime: ' . $row['cooktime'] . ' mins</h3>';
    return $str;
}

function formatIngredients(array $row) {
    $ingredients = explode('|', $row['ingredients']);
    $str = '<h4>Ingredients</h4>';
    $str .= '<ul>';
    foreach ($ingredients as $item) {
        $str .= '<li>';
        $str .= $item;
        $str .= '</li>';
    }
    $str .= '</ul>';
    return $str;
}

function formatMethod(array $row) {
    $method = explode('|', $row['method']);
    $str = '<h4>Method</h4>';
    $str .= '<ol>';
    foreach ($method as $item) {
        $str .= '<li>';
        $str .= $item;
        $str .= '</li>';
    }
    $str .= '</ol>';
    return $str;
}

function formatImage(array $row)
{
    if ($row['imagelink'] == null) {
        $image = 'http://placehold.jp/936x900.png';
    } else {
        $image = $row['imagelink'];
    };
    $str = '<img src="';
    $str .= $image;
    $str .= '" alt="picture of ' . $row['name'] . '">';
    return $str;
}

function printAllRecipes($db)
{
    $result = getData($db);
    foreach ($result as $row) {
        echo '<div class="recipe-card">';
        echo formatImage($row);
        echo formatRecipeName($row);
        echo formatIngredients($row);
        echo formatMethod($row);
        echo '</div>';
    }
}