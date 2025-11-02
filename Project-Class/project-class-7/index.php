<?php



/*------------


ট্রিপলেট সমষ্টি


সমস্যার বিবরণ
একটি প্রোগ্রাম লিখুন যেখানে আপনাকে N আকারের একটি array[] এবং একটি পূর্ণসংখ্যা P দেওয়া হবে। অ্যারেতে ট্রিপলেটটি খুঁজুন যাদের যোগফল প্রদত্ত পূর্ণসংখ্যা P এর সমান হয়।

ইনপুট
প্রোগ্রামটি একটি অ্যারের আকার হিসাবে একটি পূর্ণসংখ্যা 
N
N নেবে। তারপর এটি 
a
r
r
[
]
arr[] অ্যারের পূর্ণসংখ্যার মান নেবে। অবশেষে, এটি 
P
P এর মান নেবে।

আউটপুট
আউটপুটে ট্রিপলেট সংখ্যা তিনটি প্রিন্ট হবে।

সীমাবদ্ধতা
0 ≤ N ≤ 100000
0 ≤ arr[] ≤ 100000
0 ≤ P ≤ 100000
উদাহরণ:
Enter numbers

ইনপুট:
6
12 3 4 1 6 9
24
আউটপুট:
3 9 12 
মন্তব্য:
নেই

------------*/


// Input নেবার জন্য
$n = intval(trim(fgets(STDIN)));   // array size
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));
$P = intval(trim(fgets(STDIN)));   // target sum

// Sorting করে নিই, যাতে Two-pointer technique ব্যবহার করা যায়
sort($arr);

$found = false;

// প্রথম element fix করে loop চালানো
for ($i = 0; $i < $n - 2; $i++) {
    $left = $i + 1;
    $right = $n - 1;

    while ($left < $right) {
        $sum = $arr[$i] + $arr[$left] + $arr[$right];

        if ($sum == $P) {
            echo $arr[$i] . " " . $arr[$left] . " " . $arr[$right] . "\n";
            $found = true;
            exit; // একবার পেলে প্রোগ্রাম শেষ
        } elseif ($sum < $P) {
            $left++;
        } else {
            $right--;
        }
    }
}

// যদি কোনো triplet না পাওয়া যায়
if (!$found) {
    echo "No triplet found\n";
}



/*------------------------*/


# Read input
$n = intval(trim(fgets(STDIN)));   // Array size
$arr = array_map('intval', explode(" ", trim(fgets(STDIN))));

$positiveCount = 0;
$negativeCount = 0;

foreach ($arr as $val) {
    if ($val >= 0) {   // শূন্যকে পজিটিভ ধরা হচ্ছে
        $positiveCount++;
    } else {
        $negativeCount++;
    }
}

if ($positiveCount > $negativeCount) {
    echo "Positivity\n";
} else {
    echo "Negativity\n";
}

