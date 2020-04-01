<?php
$list = array('tomato', 'apple', 'orange', 'pear');

$list[] = 'mango';

print_r($list);

$myList=[45,46,47,478];
echo '<br>';
print_r($myList);
 $myList[3] = 5678;
 unset($myList[1]);
 echo '<br>';
 print_r(array_values($myList));

 $employees = array('Mike','Anne','Joel','David');
 $new_hires = array('Ray','Fren');

 array_splice($employees, 1, 2, $new_hires);
 print_r($employees);
$filename = 'giraffe.php';
echo '<br>';
print_r (file($filename));
echo '<br>';
var_dump($filename);
echo '<br>';
print_r (file('navigation.txt'));

$names = array('Ciku Ciku', 'Caden Mwangi', 'Ranelle Muchiri');

echo '<br>';

echo $names = (implode("|", $names));

file_put_contents('usernames.txt', $names);



?>