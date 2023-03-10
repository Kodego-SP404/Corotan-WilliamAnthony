<?php
/* ---------- Superglobals ---------- */
//Built in variables that are always available in all scopes

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_REQUEST);
?>

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
  $hate = 'I HATE DOLLAR SIGNS AND SEMI-COLONS';

  // string interpolated
  echo $hate;
  echo "<br>";
  echo "<br>";


  echo "Hi! I'm $fname, $age of age. Has $cashOnHand cash on hand";
  echo "<br>";

  // dot operator / concatenate
  echo "Hi! I'm " . $fname . ', ' . $age . ' of age. Has ' . $cashOnHand .  ' cash on hand';

  // 02. ARITHMETIC OPERATIONS
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

  // 03. ARRAYS
  //Same declaration in JS
  $array = ['el-1', 'el-2', 'el-3', 'el-4'];
  $fruits = ['apple', 'banana', 'calamansi', 'durian'];

  echo $array[1] . $array[2];
  echo "<br>";
  echo $fruits[2];
  echo "<br>";

  // Associative Arrys
  //Basically JS OBJECTS in square brackets
  $associativeArray = [
    1 => 'el-1',
    2 => 'el-2',
    3 => 'el-3',
    4 => 'el-4'
  ];
  //Key-vaLue pairing using string as key
  $associativeArrayString = [
    'first' => 'el-1',
    'second' => 'el-2',
    'third' => 'el-3',
    'fourth' => 'el-4',
  ];
  echo $associativeArray[1];
  echo "<br>";
  echo $associativeArrayString['second'];

  //Multidimentional Arrays
  $characters = [
    [
      'userName' => 'Sol',
      'class' => 'Warrior',
      'skills' => [
        1 => 'Heavy Slash',
        2 => 'Headbutt',
        3 => 'Shield Thrust',
        4 => 'Holy Strike',
      ]
    ],
    [
      'userName' => 'Luna',
      'class' => 'Mage',
      'skills' => [
        1 => 'Fireball',
        2 => 'Lightning Bolt',
        3 => 'Ice Spear',
        4 => 'Rock Bullets',
      ]
    ]
  ];
  echo "<br>";
  echo "<br>";
  echo 'user: ' . $characters[0]['userName'];

  //ENCODE AND DECODE TO JSON
  //Encode
  echo "<br>";
  echo json_encode($characters);

  //Decode
  $jsonObj = '{"userName":"Sol","class":"Warrior","skills":{"1":"Heavy Slash","2":"Headbutt","3":"Shield Thrust","4":"Holy Strike"}}';
  echo "<br>";
  echo "<br>";
  var_dump(json_decode($jsonObj));
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";
  //CONDITIONALS 

  /* ---- Conditionals & Operators ---- */

  /* ------------ Operators ----------- */

  /*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

  /* ---------- If & If-Else Statements --------- */

  /*
** If Statement Syntax
if (condition) {
   code to be executed if condition is true
}
*/

  date_default_timezone_set('Asia/Manila'); //setting defaultTimeZone to PST

  $t = date('H');


  if ($t >= 1 && $t <= 12) {
    echo 'Good Morning';
  } elseif ($t >= 13 && $t <= 17) {
    echo 'Good Afternoon';
  } elseif ($t >= 18) {
    echo 'Good Evening';
  }

  //Truety Value same in JS
  $inventory = ['Sword of Eternity'];
  echo "<br>";
  echo "<br>";
  if (!empty($inventory)) {
    echo 'Inventory is not empty';
  } else {
    echo 'Inventory is empty.';
  }

  //Ternary Operator
  $ternaryStorage = (!empty($inventory)) ?  'Inventory is not empty' : 'Inventory is empty.';
  echo "<br>";
  echo $ternaryStorage;

  $colors = 'blue';
  echo "<br>";

  switch ($colors) {
    case 'red':
      echo 'red';
      break;
    case 'green':
      echo 'green';
      break;
    case 'blue':
      echo 'blue';
      break;
    default:
      echo 'none of the above';
  }

  //LOOPS 
  //Same as JS
  //For loops
  echo "<br>";
  echo "<br>";
  for ($x = 0; $x <= 10; $x++) {
    if ($x % 2 == 0) {
      echo "Number: $x <br>";
    }
  }

  //While Loops
  echo "<br>";
  echo "<br>";
  $ekis = 1;
  while ($ekis <= 10) {
    echo "Number: $ekis <br>";
    $ekis++;
  }

  //Do-While Loops
  do {
    echo "Number: $ekis <br>";
    $ekis--;
  } while ($ekis >= 0);

  //Foreach Loops
  echo "<br>";
  echo "<br>";

  //Simp[le Array]
  $posts = ['First Post', 'Second Post', 'Third Post'];
  foreach ($posts as $post) {
    echo "$post <br>";
  }

  //Associative Array
  foreach ($associativeArray as $key => $value) {
    echo "$key - $value <br>";
  }


  //FUNCTIONS 
  //Same in JS FUNCTIONS
  echo "<br>";
  echo "<br>";
  function attack()
  {
    echo 'Attack Registered';
  }

  attack();

  echo "<br>";
  function heal($healAmount = 2)
  {
    return $healAmount;
  }

  $player1heal = heal();
  echo "Healed for $player1heal";

  //Arrow Functions
  // Arrow functions are treated as a single liner. 
  echo "<br>";
  $arrow = fn ($tip) => "This arrow has a $tip tip";

  echo $arrow('metal');

  //Array Functions/Methods
  //Documentation: https://www.php.net/manual/en/ref.array.php
  echo "<br>";
  echo "<br>";
  $classes = ['Warrior', 'Mage', 'Archer', 'Priest'];

  //getting length of an array using count()
  echo count($classes);


  //STRING FUNCTIONS/METHODS
  /*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

  $string = 'Hello World';

  // Get the length of a string
  echo strlen($string);
  echo "<br>";

  // Find the position of the first occurrence of a substring in a string
  echo strpos($string, 'o');
  echo "<br>";

  // Find the position of the last occurrence of a substring in a string
  echo strrpos($string, 'o');
  echo "<br>";

  // Reverse a string
  echo strrev($string);
  echo "<br>";

  // Convert all characters to lowercase
  echo strtolower($string);
  echo "<br>";

  // Convert all characters to uppercase
  echo strtoupper($string);
  echo "<br>";

  // Uppercase the first character of each word
  echo ucwords($string);
  echo "<br>";

  // String replace
  echo str_replace('World', 'Everyone', $string);
  echo "<br>";

  // Return portion of a string specified by the offset and length
  echo substr($string, 0, 5);
  echo "<br>";
  echo substr($string, 5);
  echo "<br>";

  // Starts with
  if (str_starts_with($string, 'Hello')) {
    echo 'YES';
  }
  echo "<br>";

  // Ends with
  if (str_ends_with($string, 'ld')) {
    echo 'YES';
  }
  echo "<br>";

  // HTML Entities
  $string3 = '<h1>Hello</h1>';
  echo $string3;

  $string2 = '<h1>Hello World</h1>';
  echo htmlentities($string2);
  echo "<br>";

  // Formatted Strings - useful when you have outside data
  // Different specifiers for different data types
  printf('%s is a %s', 'William', 'nice guy');
  printf('1 + 1 = %f', 1 + 1); // float

  ?>

  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>

</html>