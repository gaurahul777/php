<?php
//there are three types of array in php which store same or diff data type in php


//$array1=array(1,2,3,4,5);

/*one of way to print array
foreach($array1 as $av)
{
    echo"<ul>";
    echo "<li>$av <br></li>";
    echo"</ul>";
}*/


/*
$array1[0]="ram";
$array1[1]="shyam";
$array1[2]="krishna";
$array1[3]="gopal";
$array1[4]="murari";
/* second way to print array element
echo $array1[0];
echo $array1[1];
echo $array1[2];
echo $array1[3];
echo $array1[4];*/
/*echo"<pre>";//use pre tag for better look and feel
print_r($array1);
echo"</pre>";*/

//second way to create array in php ie associative arraay

$array1=[1,2,34,5,66,77];
//to print that

/*
foreach($array1 as $av)
{
    echo"<ul>";
    echo "<li>$av <br></li>";
    echo"</ul>";

}*/
echo"<pre>";
print_r($array1);
echo"</pre>";
?>