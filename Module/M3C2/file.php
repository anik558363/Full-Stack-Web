<?php


/*------- file open -------*/

// $fileName = "example.txt";

// $fileHandle = fopen($fileName, "w");

// if ($fileHandle) {
//     fwrite($fileHandle, "anik");
//     fclose($fileHandle);
//     echo "Successfully written to file.";
// } else {
//     echo "Failed to open the file.";
// }


/*------- file read -------*/



// $fileName = "example.txt";


// $fileHandle = fopen($fileName, "r");

// if ($fileHandle) {

//     $content = fread($fileHandle, filesize($fileName));

//     fclose($fileHandle);

//     echo "File content: " . $content;
// } else {
//     echo "File open failed!";
// }


/*----- file open with loop ------*/

// $fileName = "example.txt";


// $fileHandle = fopen($fileName, "r");


// while (!feof($fileHandle)) {
//     echo fgets($fileHandle);
// }

/*----- file append to the data -------*/

// $fileName = "example.txt";


// $fileHandle = fopen($fileName, "a");
// fwrite($fileHandle, "\nanik is php and laravel developer");
// fclose($fileHandle);


/*--------- file delete -------*/ 

// $fileName = "example.txt";

// if (file_exists($fileName)) {
//     if (unlink($fileName)) {
//         echo "File deleted successfully.";
//     } else {
//         echo "Failed to delete the file.";
//     }
// } else {
//     echo "File does not exist.";
// }


/*-------- file crate, delete, and append with function ---------*/ 

$fileName = "hello.txt";

// file_put_contents($fileName, "\ni love php", FILE_APPEND);
// file_get_contents($fileName);
echo file_get_contents($fileName);