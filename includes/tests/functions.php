<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    //formatRecipeName success test:
    public function testFormatRecipeNameReturnsValidHTMLGivenValidRow() {
        //arrange
        $input = ['name' => 'test name', 'cooktime' => 30];
        $expected = '<h1>test name</h1><h3>Cooktime: 30 mins</h3>';
        //act
        $result = formatRecipeName($input);
        //assert
        $this->assertEquals($expected, $result);
    }

    public function testFormatRecipeNameReturnsValidHTMLGivenEmptyInput() {
        //arrange
        $input = [];
        $expected = '<h1></h1><h3>Cooktime:  mins</h3>';
        //act
        $result = formatRecipeName($input);
        //assert
        $this->assertEquals($expected, $result);
    }

    //formatRecipeName malformed test:
    public function testRecipeNameMalformed() {
        //arrange
        $input = 21;
        $this->expectException(TypeError::class);
        //act
        $result = formatRecipeName($input);
    }

    //formatIngredients success test:
    public function testFormatIngredientsReturnsValidHTMLGivenValidRow() {
        //arrange
        $input = ['ingredients' => 'flour|eggs|milk'];
        $expected = '<h4>Ingredients</h4><ul><li>flour</li><li>eggs</li><li>milk</li></ul>';
        //act
        $result = formatIngredients($input);
        //assert
        $this->assertEquals($expected, $result);
    }

    //formatRecipeName malformed test:
    public function testFormatIngredientsMalformed()
    {
        //arrange
        $input = 'string';
        $this->expectException(TypeError::class);
        //act
        $result = formatIngredients($input);
    }

    //formatMethod success test:
    public function testFormatMethodReturnsValidHTMLGivenValidRow() {
        //arrange
        $input = ['method' => 'Do this|Do that|Do this again'];
        $expected = '<h4>Method</h4><ol><li>Do this</li><li>Do that</li><li>Do this again</li></ol>';
        //act
        $result = formatMethod($input);
        //assert
        $this->assertEquals($expected, $result);
    }

    //formatRecipeName malformed test:
    public function testFormatMethodMalformed()
    {
        //arrange
        $input = 'string';
        $this->expectException(TypeError::class);
        //act
        $result = formatMethod($input);
    }

    //formatImage success test:
    public function testFormatImageReturnsValidHTMLGivenValidRow() {
        //arrange
        $input = ['imagelink' => 'https://placekeanu.com/[300]', 'name' => 'keanu'];
        $expected = '<img src="https://placekeanu.com/[300]" alt="picture of keanu">';
        //act
        $result = formatImage($input);
        //assert
        $this->assertEquals($expected, $result);
    }

    //formatRecipeName malformed test:
    public function testFormatImageMalformed()
    {
        //arrange
        $input = 9;
        $this->expectException(TypeError::class);
        //act
        $result = formatImage($input);
    }

}


