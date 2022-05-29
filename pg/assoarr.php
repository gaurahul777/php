<?php
//associative arrray here we give array index as name called key or now to acces array via name provided by user but in indexed array there is index 0,1,2,3, like that....

// two way to create asso array

//$arr=array("joe"=>27,"ravi"=>38,"rahul"=>21);

$arr=["joe"=>27,"ravi"=>"any values","rahul"=>21.5567];


//to print that 

//print_r($arr);
var_dump($arr);

//$arr["joe"]=30;// access array or to modify
print_r($arr);

//example :2 >> here we can also provide array key be a numeric
$arr2=[1=>27,2=>"any values","rahul"=>21.5567];
print_r($arr2);
echo"<br>";


/*
foreach($arr2 as $av){

    echo $av;
}*/

//imp :--if you also want to print key with their values here is soln :-

echo"<ul>";
foreach($arr2 as $key=> $av){

    echo"<li> $key => $av </li><br>";
}
echo"</ul>";


?>