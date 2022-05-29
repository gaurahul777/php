
<?php
//one thing to remember associative array me humesa key hoti hain

//  ways to create array 

//first way

/*
$emp =array(array(1,"rahul","developer"),array(1,"raghav","mechanics",24),array(3,"karan"));
*/

//second way
/*$emp=[[1,"rahul","developer"],[2,"karan","mechanics",26],[3,"doctor"]];*/

//third way ie associative array
/*
$marks = array("krishna"=>array("physics"=>85,"chemistry"=>89,"maths"=>78),
"salman"=>array("physics"=>68,"chemistry"=>79,"maths"=>73),"mohan"=>array("physics"=>62,"chemistry"=>92,"math"=>67)
);*/
$marks=[
    "krishna"=>[55,66,78],
    "rahul"=>[88,90,76],
    "ravi"=>[78,45,67]

];


// print multiarray 
//echo $emp[0][2];

//print way
/*echo"<pre>";
print_r($emp);
echo"</pre>";*/
//pprint way
//by for loop


// imp printing an multiarray way
/*
echo"<table border='5px' cellpadding='15px' cellspacing='5px'>";
echo "<tr>
<th> emp id</th>
<th> emp name</th>
<th> emp designator</th>
<th> emp age</th>
";
foreach($emp as $v1)
{
    echo"<tr>";
 foreach($v1 as $v2)
    {

        echo "<td>".$v2."</td>";
    }

    echo"</tr>";
}
echo"</table>";*/

//print 
echo"<center>marks</center>";
echo"<table border='3px' cellpadding='5px'>";
echo"<tr>
<th>Name</th>
<th> physics </th>
<th> maths</th>
<th> chemistry </th>
";
foreach($marks as $key => $var)
{
   //trick for key remember
    echo"<tr>
    <td>$key</td>";
foreach($var as $pr)
{ 
    echo"<td>".$pr."</td>";
}
//echo "<br>";
echo"</tr>";
}
echo"</table>";

//print way 

echo"<pre>";
print_r($marks);
echo"</pre>";

?>