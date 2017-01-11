<?php

$contents = file_get_contents('alice.txt', 'r');
$words = explode(' ', $contents);

$count_words = array_count_values($words);
echo '<pre>';
print_r($count_words);

?>

<!-- <?php

$contents = file_get_contents('alice.txt', 'r');
$words = explode(' ', $contents);

$words = array();
$count_words = array_count_values($words);
echo '<pre>';
print_r($count_words);

// print_r($words);

// function array_count_values($words) {
//         $words = array();
//         foreach($words as $word) {
//             foreach($word as $count_words => $value1) {
//                 if(strtolower($count_words) == strtolower($value)) {
//                     $word[$count_words]++;
//                     continue 2;
//                 }
//             }
//             $words[$value] = 1;
//         }
//         return $word;
// }

// $ar = array($word);
// $ar2 = array_count_values($ar);
// $ar = array_count_values($ar);
// print_r($ar2);
// print_r($ar);


?> -->


















<!-- <?php

// $contents = file_get_contents('alice.txt', 'r');
// $words = explode(' ', $contents);

function array_icount_values($array) {
    $ret_array = array();
    foreach($array as $value) {
        foreach($ret_array as $key2 => $value2) {
            if(strtolower($key2) == strtolower($value)) {
                $ret_array[$key2]++;
                continue 2;
            }
        }
        $ret_array[$value] = 1;
    }
    return $ret_array;
}

$words = array('MLMANAGUELOD', 'mlmanaguelod', 25, '25', 'emz', 'EMZ', 'Hello', 'HELLO', 'hello', 'HELLo', 'YAAAS');
$words2 = array_count_values($words);
echo '<pre>';
$words = array_icount_values($words);
print_r($words2);
print_r($words);
?> -->








<!-- <?php
$word = "Hello world!!";
$wordArray = count_chars($word,1);

foreach ($wordArray as $words=>$word)
   {
   echo "The word <b>'".chr($words)."'</b> was found $word time(s)<br>";
   }
?> -->

<!-- <?php

// $contents = file_get_contents('alice.txt', 'r');

// $words = explode(' ', $contents);

$array = array("Hello","hello","kumusta","Kumusta","pig","Babuy","pig","pig","bano","Bano","bano","emz","ML","emz","ML","ML",);
print_r(array_count_values($array));
?> -->








<!-- <table>
   <tr>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
   </tr>

</table> -->