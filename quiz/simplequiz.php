<?php
session_start();
if($_SESSION['usertype']=='admin'){
echo"<a href='queform.php'>addque</a><a href='viewque.php'>view</a>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="jquery-3.2.1.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<script src="simplequiz.js" type="text/javascript"></script>
    <link href="simplequiz.css" rel="stylesheet"/>
  <title>Dipo Quiz App </title>
</head>
<body>
    <div class="container">
    <div class="row">
       <div class="col-md-9">
    
        <ul><li>
Quiz Application</li></ul>
<hr>
    <ul><li style="text-align: center">Simple Quiz Application</li></ul>

  
    
    <hr>
	<div class="container" id="welcomemsg">
	<?php
	if(isset($_SESSION['myusername'])){
		echo"you log in as". $_SESSION['myusername'];
		echo"<br><a href='logout.php'>logout</a>";
	}
	else{
		echo"<a href='login.html'>login</a><br/>";
		echo"<a href='contact.php'>signup</a>";
		
	}
	
	?>
	</div>
           <p id="timeallowed"></p>
    <div id="container2">
        
    <ul><li id="questionNumber">Questtion No</li></ul>
    
        </div>
    <div id="container3">
        
        <p id="question">Click Start button to reveal question</p>
        
    
        <hr>
           <form class="showHide">
           
           <ul><li><input type="radio" name="answer" value="" id="optionA"/> <span id="optionValueA"> </span> </li><br>
           <li><input type="radio" name="answer" value="" id="optionB"/> <span id="optionValueB"> </span> </li><br>
           <li><input type="radio" name="answer" value="" id="optionC"/> <span id="optionValueC"> </span> </li><br>
           <li><input type="radio" name="answer" value="" id="optionD"/> <span id="optionValueD"> </span> </li><br>
           
        
        </ul>
        </form>
    </div>
        
        <div id="buttons">
        <ul>
        <li>
       
        <button class="showHide" id="prev">Prev</button>
            <button class="showHide" id="next">Next</button>
        <button id="start">start</button></li>
            </ul>
            </div>
        </div>
        
        
        
        <p id="scores"></p>
        
        </div></div>
</body>
</html>