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
?>