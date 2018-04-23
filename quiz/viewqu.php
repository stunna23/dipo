<?php

   $host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="test"; // Database name
    
 mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$limit = 2;  
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;  
  
$sql = "SELECT * FROM quizquestion LIMIT $start_from, $limit";  
$rs_result = mysql_query ($sql);  
?>
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>title</th>  
<th>body</th>  
</tr>  
</thead>  
<tbody>  
<?php  
while ($row = mysql_fetch_assoc($rs_result)) {  
?>  
            <tr>  
            <td><?php echo $row["questions"]; ?></td>  
            <td><? echo $row["answers"]; ?></td>  
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>   