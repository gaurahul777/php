<?php
//function arguments with reference by using & for address
function test(&$msg)
{

    $msg.="  hello budyy you got  hack";
}
$str="hey iam rahul";
test($str);
echo $str;



?>