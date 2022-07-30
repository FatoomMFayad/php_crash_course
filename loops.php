<?php
$age = 10;
//while
// while ($age > 0) {
//     echo $age.'<br>';
//     $age--;
// }
/**************************/
//do-while
// do {
//     echo $age.'<br>';
//     $age--;
// }while($age > 0);
/**************************** */
//for loop
for ($i = 0 ; $i < $age; $i++) {
    echo $i.'<br>';
}
/******************* */
//foreach
$vegetables = ["Tomato", "Onion", "Potato", "Pepper"];
foreach($vegetables as $i=>$v) {
    echo $i.'- '. $v.'<br>';
}
/******************** */
//Iterate over associative array
$person = [
    'name' => 'Ola',
    'suname' => 'Ali',
    'Age' => 18,
    'Skills'=> ['SQL', 'PHP','JS'],
];
foreach($person as $key => $p) {    
    if(is_array($p)){
     echo $key.':'.implode(", ", $p).'<br>';   
    }else{
        echo $key.':' . $p.'<br>';  
    }
    
}
?>