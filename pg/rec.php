<?php
function add($num){

    if($num<1)
    {
        return 0;
    }else{
        return $num +add($num-1);
    }
}

echo add(5);


?>
