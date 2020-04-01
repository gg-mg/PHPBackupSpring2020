<?php
$author = "Ranelle Muiga";

$pattern = '/muiga/i';

echo preg_match($pattern, $author);
$string = "&copy; 2017 Mike's Music. \ All rights reserved (5/2017).";
echo $string;
echo '<br>';
echo preg_match('/\xA9/', $string);
echo '<br>';
echo preg_match('////', $string);
echo '<br>';
echo preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches);
echo '<br>';
print_r($matches);
echo '<br>';
echo preg_match('/\\\/', $string);
echo '<br>';
$string1 = 'The Empire Strikes back';
$array = array (
    0 => 'Empire',
    1 => 'Jedi'
);
$impi = implode("|", $array);
echo $impi;
echo preg_match('/$impi/i', $string1);

echo preg_match('/' . implode("|", $array) . '/', $string1);

$ndeh = '/Empire|Jedi/';
echo preg_match($ndeh, $string1);

$string2 = "Ray Harris\nAuthor"."\n"."Newline";
echo $string2;
echo "hello\nworld";

$unit1 = 'Gitachu';


echo '<p>' . $unit1 . "</p>";

echo "Uka nake\n";


echo "If you view the page source \r\n you will find a newline in this string.";
echo "<br>";
echo nl2br("You will find the \n newlines in this string \r\n on the browser window.");
?>