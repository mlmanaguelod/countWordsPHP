<?php

$contents = file_get_contents('alice.txt', 'r');
$words = explode(' ', $contents);

// $ret_array = ($words);
//     foreach($words as $value) {
//         foreach($ret_array as $key2 => $value2) {
//             if(strtolower($key2) == strtolower($value)) {
//                 $ret_array[$key2]++;
//                 continue 2;
//             }
//         }
//         $ret_array[$value] = 1;
//     }
//     return $ret_array;

$count_words = array_count_values($words);
echo '<pre>';
print_r($count_words);

?>
















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











<!-- <table>
   <tr>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
       <th></th>
   </tr>

</table> -->