<html>
    <body>
        <form>
           <h1> enter your number : <input type ="number" name="num1"><br>
             <input type ="submit" name="sub" value="Calculate"><br></h1>
</form>
<?php
if(isset($_GET["sub"]))
{
/*settype($i,"double");
settype($sum,"double");
settype($count,"double");
settype($number,"double");
settype($rem,"double");*/
    $number =$_GET["num1"];
    echo " user input : $number <br>";
   //$num=$number;
   $i=0;
   $rem=0;
   $sum=0;
    while((int)$number)//typecasting is imp
    //for(;(int)$number!=0;)
    {
$i=$i+1;
$rem=$number%10;
$sum=$sum+$rem;
$number=$number/10;
    }
   // $i=strlen((string)$num);
   // echo $num!==0?floor(log10($num)+1);
//$i=mb_strlen($num);
echo " no of digit : $i <br> ";
echo " total sum of digit : $sum <br>";
}
?>
</body>
</html>