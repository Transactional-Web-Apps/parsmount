<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.jpg" type="image/x-jpg">
	<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	<?php
    echo '<link rel="stylesheet" href="'.ROOTURL.'/Resources/parsmount.css">';
    ?>   
	<title>Parsmount Website - Sign in</title>
</head>
<body>

<header>
        Parsmount
    </header>

    <nav>
       
	<?php
            echo '<a href="'.ROOTURL.'/home/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/event/">Event</a>&nbsp;&nbsp;&nbsp;&nbsp;';     
            echo '<a href="'.ROOTURL.'/contact/">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/aboutus/">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            //echo '<a href="'.ROOTURL.'/signin/" id="current">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            if (session_status() === PHP_SESSION_NONE){
                session_start();
                if(!isset($_SESSION["username"]))
                    session_destroy();
            }                       
            if(isset($_SESSION["username"])){
                //echo '<a href="'.ROOTURL.'/logout/">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.ROOTURL.'/users/logout/'.$_SESSION["username"].'">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '<span style="color:green;font-size:1.2em">'.$_SESSION["username"].'</span>';                
            } else
                echo '<a href="'.ROOTURL.'/signin/" id="current">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';

        ?>
    </nav>

<div class="container">

<div class="login-box">   

<div class="row" >   
	<div class="col-md-6"> 
	<br><br>
	<h2> Sign in </h2>
	<br>
	<form action="http://localhost/parsmount/users/getuser/" method="post">
		<div class="form-group">
				<label>UserName</label>
				<input type="text" name="username" id="username" class="form-control" required />
		</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" required />
			</div>
			
		<button  type="submit" class="btn btn-primary"> Login </button>
		&nbsp;&nbsp;
		<!-- <a href="signup.php" style="color:blue">Sign up</a> -->
		<?php
		echo '<a href="'.ROOTURL.'/signup/" style="color:blue">Sign up</a>'; ?>
		
		
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
	<?php
    class Signin{
        function __construct(){

        }        
    }
   ?>

</body>
</html>