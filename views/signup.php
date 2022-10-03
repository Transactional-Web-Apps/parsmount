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
	<title>Parsmount Website - Sign up</title>
</head>
<body>

<header>
        Parsmount
    </header>

    <nav>
 
	<?php
            echo '<a href="'.ROOTURL.'/home/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/events/list/">Event</a>&nbsp;&nbsp;&nbsp;&nbsp;';     
            echo '<a href="'.ROOTURL.'/contact/">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/aboutus/" id="current">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            //echo '<a href="'.ROOTURL.'/signin/">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            //echo '<a href="'.ROOTURL.'/signup/" id="current">Sign up</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            if (session_status() === PHP_SESSION_NONE){
                session_name("parsmount");
                //session_id("IDparsmount");
                session_start();
                if(!isset($_SESSION["username"])) {
                    if(session_id() !=  " " || isset($_COOKIE[session_name()]))
                        setcookie(session_name(), " " , time()-3600, "/"); 
                    session_destroy();
                }
            }                       
            if(isset($_SESSION["username"])){
                //echo '<a href="'.ROOTURL.'/logout/">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="'.ROOTURL.'/users/logout/'.$_SESSION["username"].'">logout</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '<span style="color:green;font-size:1.2em">'.$_SESSION["username"].'</span>';                
            } else {
                echo '<a href="'.ROOTURL.'/signin/">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
                echo '<a href="'.ROOTURL.'/signup/" id="current">Sign up</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            }
        ?>
    </nav>

<div class="container">

<div class="login-box">   

<div class="row" >   
	<div class="col-md-6"> 
	<br><br>
	<h2> Sign up </h2>
	<br>
	<form action="http://localhost/parsmount/users/createuser/" method="post">
		<div class="form-group">
				<label>UserName</label>
				<input type="text" id="username" name="username" class="form-control" required />
		</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password" id="password" name="password" class="form-control" required />
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" id="email" name="email" class="form-control" required />
			</div>			
			
		<button type="submit" class="btn btn-primary"> Submit </button>
		
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
    class Signup{

        function __construct($data){
            // In our case $data for the create function is the number of rows affected / created
            $this->render($data);
        }       

        function render($data){      // var_dump ($_POST);/////
            if(isset($_POST) && !empty($_POST)){  
                if($data > 0){
                    echo '<script>alert("The user was successfully created.")</script>';                    
                }
				else{                    
                    echo '<script>alert("There was an error creating the user.")</script>';
                }
            }        
        }            
    }
   ?>

</body>
</html>