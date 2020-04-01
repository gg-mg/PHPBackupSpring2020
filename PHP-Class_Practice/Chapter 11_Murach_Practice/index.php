<?php
function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;

function foo() 
{
    unset($GLOBALS['bar']);
}

$bar = "something";
foo();
echo $bar;

$a = "Hello world!";
echo "The value of variable 'a' before unset: " . $a . "<br>";
unset($a);
echo "The value of variable 'a' after unset:" . $a;
echo"<br>";

function too()
{
    static $bar;
    $bar++;
    echo "Before unset: $bar, ";
    unset($bar);
    $bar = 23;
    echo "after unset: $bar\n";echo"<br>";
}

too();
too();
too();

$numbers = array(1,2,3,4,5,6,7,8,9,10);
unset($numbers[2], $numbers[6]);
end($numbers);
$last = key($numbers);
$numbers_string = '';
for($i = 0; $i <= $last; $i++){
    if(isset($numbers[$i])){
        $numbers_string .= $numbers[$i].' ';
}
}
echo $numbers_string ;
echo"<br>";
echo count($numbers);
echo"<br>";
print_r($numbers);

$name = array('first' => 'Caden', 'last' => 'Mwangi');
$name['another'] = 'Veronicah';
$name[] = 'Jarapingping';
$name[] = 'Ndehurio';
print_r($name);
echo"<br>";
$numbers = array(1,2,3,4,5,6,7,8,9,10);
unset($numbers[2], $numbers[6]);
foreach($numbers as $num){   
 //$numbers_string .= $numbers[$i].' ';
 echo $num.' '; 
}
echo"<br>";
echo count($numbers);


?>