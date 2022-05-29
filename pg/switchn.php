<?php
$age=18;
//now switch is open for every case here every case is printed if condn arn not applied
switch(true) 
{
    case($age<18 ):
        echo"not eligible";
break;
case($age>=18 and $age <30):
    echo"eligible";
    break;
    default: echo" please eneter valid details";

}


?>