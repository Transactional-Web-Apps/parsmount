<!DOCTYPE html>
<html>
<head>
<title>Login DataBase mySQL PHP</title>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.jpg" type="image/x-jpg">
	<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<link rel="stylesheet" href="../parsmount.css">
	<title>Parsmount Website - Sign in</title>
</head>
<body>

<header>
        Parsmount
    </header>

    <nav>
 
        <a href="index.php">Home</a>&nbsp;&nbsp;
        <a href="event.php">Event</a>&nbsp;&nbsp;       
        <a href="contact.php">Contact</a>&nbsp;&nbsp;
		<a href="signin.php">Sign in</a>&nbsp;&nbsp;
		<a href="signup.php" id="current">Sign up</a>&nbsp;&nbsp;
    </nav>

<div class="container">

<div class="login-box">   

<div class="row" >   
	<div class="col-md-6"> 
	<br><br>
	<h2> Sign up </h2>
	<br>
	<form action="validation.php" method="post">
		<div class="form-group">
				<label>UserName</label>
				<input type="text"  name="user" class="form-control" required />
		</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password"  name="password" class="form-control" required />
			</div>

			<div class="form-group">
				<label>First Name</label>
				<input type="text"  name="firstname" class="form-control" required />
			</div>

			<div class="form-group">
				<label>Last Name</label>
				<input type="text"  name="lastname" class="form-control" required />
			</div>
			
		<button  type="submit"  class="btn btn-primary"> Submit </button>
		
	</form>
	</div>
		


</div>
</div>
</div>
<br><br>
<footer>
        <p><i>
                Copyright &copy; 2022 Parsmount <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer>
</body>
</html>