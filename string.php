<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    
    $vowelCount = 0;
    
    $reverseString = " ";

    // Count vowels
    for ($i = 0; $i < strlen($string); $i++) {

        $charecter = strtolower($string [$i] );

        if (in_array($charecter, array('a', 'e', 'i', 'o', 'u'))) {

            $vowelCount++;
        }
    }

    // Reverse string
    $reverseString = strrev($string);

    // Print results

          echo "Original String is : $string".PHP_EOL;
             
             echo "Reverse String is : $reverseString".PHP_EOL;

                   echo "Vowel Count is : $vowelCount".PHP_EOL;
}

