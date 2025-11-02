<?php

// file_put_contents("padnda.txt", "Hello this Panda");

// echo file_get_contents("padnda.txt");
// echo unlink('padnda.txt');


// $file = fopen('panda.txt', 'w');
// fwrite($file, 'hello thisdafasds is pandas');
// fclose($file);


// $file = fopen('panda.txt', 'r');
// echo fread($file, filesize("panda.txt"));
// fclose($file);


$file = fopen('panda.txt', 'a');
echo fwrite($file, "added ANik");
fclose($file);

?>