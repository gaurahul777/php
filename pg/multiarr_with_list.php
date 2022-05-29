<?php
$emp=[
[1,"rahul","developer",21],
[2,"karan","mechaniocs",23],
[3,"ashok","scientist",27]
];

//here to avoid double array or nested array its recommended to use list best and simple way to print array

//num of inner array element is equal to no. of parameter in list();
echo"<table border='2px'>";
echo"<tr>
<th>emp id</th>
<th>emp name</th>
<th>emp designation</th>
<th>emp age</th>";
foreach($emp as list($id,$name,$desig,$age)){
echo"<tr>";
    echo "<td>$id</td>
    <td>$name</td>
    <td>$desig</td>
    <td>$age</td>";
echo"</tr>";
}
echo"</table>";

?>