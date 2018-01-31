<?php

$a = array();

    $a[] = 1;
    $a[] = 2;
    $a[] = 3;
    $a[] = 4;

    echo $a[1];
$b = array(1,2,3);
echo "</br>";
echo $b[0];
$c =  array("a" => 2, "b"=>4);
echo "<br>";
$countA = count($a);
echo $countA;
//print_r($a);
echo "<br>";
for($i = 0; $i<count($a);$i++ )
{
    echo $a[$i];
}
$i = 0;
echo "<br>";
while($i <count($a))
{
    echo $a[$i];
    $i++;
}
echo "<br>";
foreach( $a as $x)
{
    echo $x;
    echo "<br>";
}




?>