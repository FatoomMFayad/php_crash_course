<?php
$age = 20;
$salary = 3000;
$gender = 'male';
// ا
if ($salary <= 2000 || $age === 20) {
    $salary = $salary * 2;
} else {
    $salary = $salary;
}
($salary <= 2000 || $age === 20) ? ($salary = $salary * 2) : $salary = $salary;
echo $salary;
// اذا كان الموظف عمره أكبر من 20 وذكر اضرب الراتب في 1.5
if ($age > 20 && $gender === 'male') {
    $salary = $salary * 1.5;
}
echo $salary;
// اذا كان الموظف راتبه أقل من 5000 أو جنسه ذكر اطرح من الراتب 1000

if ($salary < 5000 || $gender === 'male') {
    $salary -= 1000;
}
echo $salary . '<br>';

$userRole = 'apple'; //editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin' . '<br>';
        break;
    case 'editor':
        echo 'editor' . '<br>';
        break;
    case 'user':
        echo 'user' . '<br>';
        break;
    default:
        echo 'Invalid role';
}
