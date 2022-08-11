<?php
$fact = 1;

for($i = 1;$i <= 5;$i++)
{
    $fact = $fact * $i;
    $i++;
}

print "5! = " . $fact;
?>