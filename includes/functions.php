<?php

function getData(PDO $db): array
{
    // PDO QUERY
    $query = $db->prepare('SELECT `id`, `name`, `ingredients`, `method`, `cooktime`, `imagelink`, `deleted` FROM recipe_data WHERE `deleted` = 0;');
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}

function formatRecipeName(array $row): string
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

function createDeleteButton(array $row) {
    $str = '<div>
                <form method="post" action="removeCard.php">
                    <input type="hidden" name="id" value="' . $row['id'] .'">
                    <input type="submit" class="button" name="delete" value="Delete">
                </form>
            </div>';
    return $str;
}

function deleteRecipe(PDO $db, array $recipe)
{
    if (isset($_POST['delete'])) {
        $query = $db->prepare('UPDATE `recipe_data` SET `deleted` = 1 WHERE `id` = ?');
        $query->execute([$recipe['id']]);
    }
}

function printAllRecipes(PDO $db): void
{
    $result = getData($db);
    foreach ($result as $row) {
        echo '<div class="recipe-card">';
        echo formatImage($row);
        echo formatRecipeName($row);
        echo formatIngredients($row);
        echo formatMethod($row);
        echo createDeleteButton($row);
        echo '</div>';
    }
}

function addNewRecipe(PDO $db, array $newRecipe): bool {
    $query = $db->prepare(
        'INSERT INTO `recipe_data` (`name`, `cooktime`, `ingredients`, `method`, `imagelink`)'
        . ' VALUES (?, ?, ?, ?, ?);'
    );

    $name = $_POST['name'];
    $cooktime = $_POST['cooktime'];
    $ingredients = preg_replace('/(\r\n)+|(\r)+|(\n)+/', '|', $_POST['ingredients']);
    $method = preg_replace('/(\r\n)+|(\r)+|(\n)+/', '|', $_POST['method']);
    $imagelink = $_POST['imagelink'];

    return $query->execute([$name, $cooktime, $ingredients, $method, $imagelink]);
}
