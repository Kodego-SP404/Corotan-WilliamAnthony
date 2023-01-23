<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  // echo 'hello hi test test234';

  /* ----- Variables & Data Types ----- */

  /* --------- PHP Data Types --------- */
  /*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

  /* --------- Variable Rules --------- */
  /*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/
  $fname = 'William';
  $age = 22;
  $hasKids = false;
  $cashOnHand = 1.50;
  // string interpolated
  echo "Hi! I'm $fname, $age of age. Has $cashOnHand cash on hand";
  echo "<br>";
  // dot operator / concatenate
  echo "Hi! I'm " . $fname . ', ' . $age . ' of age. Has ' . $cashOnHand .  ' cash on hand';

  // Arithmetic Operations
  // ADDITION - all will be added. 
  $add = 1 + 2;
  $add2 = '1' + '2';
  $add3 = 1 + '2';

  echo "<br>";
  echo $add;
  echo "<br>";
  echo $add2;
  echo "<br>";
  echo $add3;
  echo "<br>";

  //SUBTRACTION
  $subtract = 2 - 1;

  echo "<br>";
  echo $subtract;
  echo "<br>";

  //MULTIPLICATION
  $subtract = 2 * 1;

  echo "<br>";
  echo $subtract;
  echo "<br>";

  //DIVISION
  $subtract = 4 / 2;

  echo "<br>";
  echo $subtract;
  echo "<br>";


  //CONTANTS
  define("CONSTANT_NAME", "Value");
  echo "<br>";
  echo CONSTANT_NAME;
  echo "<br>";
  ?>
</body>

</html>