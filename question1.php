<?php

$text = <<<THETEXT
 Prepare a script in PHP which takes 2 inputs, the first input will be a non-negative integer and the second will be a string of words separated by one or more spaces and ending with a full stop
The script will take the sentence and re-arrange it to have as many words in it as possible in any order as long as the total amount characters in the string is less than or equal to the amount specified in the first input  
Solve this algorithm recursively.
THETEXT;

function recursiveLimit ($chars, $text) { // takes 2 inputs
    if (strlen($text)>$chars) { // the total amount characters in the string is less than or equal to the amount specified
        if (substr($text, strlen($text)-1) == '.') { // ending with a full stop
            $text = substr($text, 0, strlen($text)-1); // have as many words in it as possible (so, I removed the bigger words)
        }
        $text = str_replace ("\n", ' ', $text);
        $words = explode(' ', $text);
        usort ($words, function($a, $b) {
            return strlen($b) - strlen($a);
        });
        unset ($words[0]);
        $text = implode (' ', $words);
        return recursiveLimit ($chars, $text); // Solve this algorithm recursively
    } else {
        return $text."."; // ending with a full stop
    }
}

$text = recursiveLimit (105, $text);
print_r($text);
