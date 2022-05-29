<?php
echo "hello world";
//echo 5+98;

function add()
{
    global $x,$y;
    $z=$x+$y;
    print($z);
}
///$name1;
//print($name1);
$x=25;
$y=3;
$z=$x+$y;
$m=$x*$y;
$s=$x-$y;
$x=30;
$d=$x/$y;
$mod=$x%$y;
$e=$x**$y;
echo"  add=", $z,"  mul=" ,$m,"  sub=" ,$s,"divide=",$d,"modulous=",$mod,"exponent=",$e;
/*echo"your func = ";
if($x==25)
print("yesssssssssssssss");
else
print("n0oooooooooooo");
add();*/
?>