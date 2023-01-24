<?php

/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = './data/users.txt';

if (file_exists($file)) {
  // fopen() gives you more control over the file.
  // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Stella' . PHP_EOL . 'Mei' . PHP_EOL . 'William' . PHP_EOL . 'Anthony';
  fwrite($handle, $contents);
  fclose($handle);
}
