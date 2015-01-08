<title>My PHP Argument File</title>

<?php

function takes_array($input)
{
    echo "$input[0] + $input[1] = ", $input[0]+$input[1];
}

?>

<?php
function add_some_extra(&$string)
{
    $string .= 'a happy string.';
}
$str = 'Hello there! I am a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'
?>

<?php
function mascot($type = "BULLDOGS!!!")
{
    return "HELLO WORLD! MY NAMES IS PARKER, AND I AM AT THE HEART OF THE $type.\n";
}
echo mascot();
echo mascot(null);
echo mascot("BULLDOGS!");
?>


<?php
function school($place, $name = "PHS (Pasadena High School)")
{
    return "And where are they, you ask? Well, they are at none other than $name $place.\n";
}
 
echo school("- Parker Zink,"
        . " Pasadena High School");   // works as expected
?>