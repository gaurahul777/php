<?php

// associative array in multiarray second one first one in last of multiarr.php
$emp=[
["id"=>1,"name"=>"rahul","designatio"=>"developer","age"=>21],
["id"=>2,"name"=>"ravi","designatio"=>"doctor","age"=>23],
["id"=>3,"name"=>"rohit","designatio"=>"scientist","age"=>24]
];

//little change for asso array print with list add key name as given in array

echo"<table border='2px'>";
echo"<tr>
<th>emp id</th>
<th>emp name</th>
<th>emp designation</th>
<th>emp age</th>";
foreach($emp as list("id"=>$id,"name"=>$name,"designatio"=>$desig,"age"=>$age)){
echo"<tr>";
    echo "<td>$id</td>
    <td>$name</td>
    <td>$desig</td>
    <td>$age</td>";
echo"</tr>";
}
echo"</table>";

?>