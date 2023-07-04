<?php
/**
 * Les phrases suivantes ont été crypté avec l'algorithme du kata d'hier.
 * à vous de les décoder.
 */

 $troubledPhrases = [
    '!1015117p101rM111td101P9755101',
    'V105v101 !101 PHP',
    '!111r101m Ip5117m',
    't111117t 1015t t111117j111117r5 111bj101t.',
    'D105ct105111nn97105r101',
    'P97105n 97117 ch111c111!97t',
    'Ch111c111!97t105n101',
    'Ec111c111nc101pt105111n'
 ];

 $vowels = [
    ord('a') => 'a',
    ord('e') => 'e',
    ord('i') => 'i',
    ord('o') => 'o',
    ord('u') => 'u',
    ord('y') => 'y',
 ];

 foreach($troubledPhrases as $phrase) {

    foreach($vowels as $ascii => $vowel) {
        $phrase = str_replace($ascii, $vowel, $phrase); 
    }

    $phrase = str_replace('!', 'l', $phrase);
    $phrase = str_replace('5', 's', $phrase);

    echo $phrase . PHP_EOL;
 }