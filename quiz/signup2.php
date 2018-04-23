  <?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "post";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
       $name = mysqli_real_escape_string($conn, $_POST['name']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
 
$sql = "INSERT INTO users (name, lname, email, password) VALUES ('$name', '$lname', '$email', '$password')";
 
if($conn->query($sql) === TRUE){
 echo "success";
 echo'<script type="text/javascript">alert("pop up" )</script>';
}

else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
$msg = "this is a php line of text"

$headers = "From: webmaster@example.com" . "\r\n" .
	mail($msg,$email,$txt,$headers);
   
$conn->close();
?>