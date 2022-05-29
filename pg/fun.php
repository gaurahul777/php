<?php
function hello(){

    echo"hello world";
}

function sum($v1,$v2)
{
return $v1+$v2;

}
//default values
function name($f="rahul",$l="gaur")
{
echo "hello $f $l<br>";
}
hello();
echo"<br>";
echo"<br>";
name();
name("kamal");//by default take second arg
echo "<br>".sum(2,3);


?>
