<?php
//variable function in php
function wow($name){

    echo"hello $name";
}



$fun="wow";//here i store function wow name in variable fun

$fun("rahul");//now variable fun work as a function and its call wow function indirectly


//here function story is same as learn previous



//2.)) anonymous variable functions in php

//here function name is not required only variable
$say=function($name2)
{

    echo"hello $name2";
};

$say("rahul");

?>