<?php


/*


 First 100 units | 5 Taka per unit 
 101 – 200 units | 10 Taka per unit 
 201 – 500 units | 15 Taka per unit 
 501 – 1000 units | 20 Taka per unit 
 More than 1000 units | 25 Taka per unit 


*/


echo "Enter Units Consumed : ";
$units =   (int) readline();


if ($units <= 100) {
    $bill = $units * 5;
} elseif ($units <= 200) {
    $bill = 100 * 5 + ($units - 100) * 10;
} elseif ($units <= 500) {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
} elseif ($units <= 1000) {
    $bill = 100 * 5 + 100 * 10 + 300 * 15 + ($units - 500) * 20;
} else {
    $bill = 100 * 5 + 100 * 10 + 300 * 15 + 500 * 20 + ($units - 1000) * 25;
}



echo "Total Bile $ " . $bill;