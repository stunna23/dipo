<html>
<head>
   
	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="contact.css" rel="stylesheet" />
	<link href="signup.js" rel="stylesheet" />
	
	<script src="jquery-3.2.1.min.js"></script>
	<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>contact form </title>
    </head>
    <body>
        
        
        <div class="container" id="container2">
		<ul><li><a href="simplequiz.php">back home</a></li>
</ul>
             Fill in your information below to contact us or Login
    <form method="post" action="signup.php" id="contact">
    <div class="form-group">
      <label for="FName">First Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
        <div class="form-group">
      <label for="LName">Last Name:</label>
      <input type="text" class="form-control" id="lname" name="lname" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password"  name="password" required>
    </div>
        <div class="form-group">
      <label for="email">email:</label>
      <input type="text" class="form-control" id="email"  name="email" required>
    </div>
        <div class="form-group">
      <input type="submit" id="submit" name="submit">
    </div>
      
        
  </form>
            </div>
        <div id="logout"></div>
        <div id="message"></div>
         <div id="mail-status"></div>
     <script src="signup.js"></script> 
        
    </body>
</html>










