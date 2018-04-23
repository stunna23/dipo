<?php
session_start();
if(isset($_SESSION['myusername'])){
session_destroy();
echo"you are successfully logged out";
header("location:simplequiz.php");
}

?>