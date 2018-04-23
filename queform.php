<?php
require("config.php");

if(isset($_POST['submit'])){
$question=$_POST['questions'];
$answers=$_POST['answers'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$sql = "INSERT INTO quizquestion(questions, answers, option1, option2, option3, option4) VALUES('$question','$answers','$option1','$option2','$option3','$option4')";
$result = mysql_query($sql);
if($result){

 echo'<script type="text/javascript">alert("pop up" )</script>';}

}
?>
<html>
<head>
<title>
    </title>
    </head>
    <body>
    put your questions
        <form action="queform.php" method="post">
        <div class="form-group">
            <label for="questions">question</label>
            <input type="text" name="questions" id="questions"/></div>
            <div class="form-group">
                <label for="answers">answers</label>
    <input type="text" name="answers" id="answers"/></div>
            
             <div class="form-group">
                <label for="option1">option1</label>
    <input type="text" name="option1" id="option1"/></div>
            
             <div class="form-group">
                <label for="option2">option2</label>
    <input type="text" name="option2" id="option2"/></div>
            
             <div class="form-group">
                <label for="option3">option3</label>
    <input type="text" name="option3" id="option3"/></div>
            
            
             <div class="form-group">
                <label for="option4">option4</label>
    <input type="text" name="option4" id="option4"/></div>
            
            
            
            <input type="submit" name="submit"/>
        </form>
    </body>
</html>