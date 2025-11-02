<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ['a', 'e', 'i', 'o', 'u'];



foreach ($strings as $key => $values) {

    $vowelCount = 0;

    for ($i = 0; $i < strlen($values); $i++) {
        if (in_array($values[$i], $vowels)) {
            $vowelCount++;
        }
    }

    echo "Original String: " .  "$values " . ", Vowel Count: " . $vowelCount . ", Reversed String: " . strrev($values) . "\n";
}
