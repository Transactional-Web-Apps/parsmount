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
	<title>Parsmount Website - About us</title>
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
            echo '<a href="'.ROOTURL.'/aboutus/" id="current">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            //echo '<a href="'.ROOTURL.'/signin/">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
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
                echo '<a href="'.ROOTURL.'/signin/">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
        ?>		
    </nav>

<div>

<section>
        <br>
        <div>
       <h3 style="text-align: center;">About Us</h3>
      
           <!-- <video src="../Resources/aboutvideo.MP4" width="640" height="400" style="padding: 45px" type="video/mp4" controls="controls" autoplay> -->
           <?php
            echo '<video src="'.ROOTURL.'/Resources/aboutvideo.MP4" width="640" height="400" style="padding: 45px" type="video/mp4" controls="controls" autoplay>';
            ?> 
   </div>

   
   <div>
      
       <strong style="padding: 45px">What is Parsmount?</strong>
       <p style="padding: 45px">
           Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the
            industry; standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged.
            It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and
            more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
       </p>
      
   </div>
  </section>
<br><br>
<footer>
        <p><i>
                Copyright &copy; 2022 Parsmount <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer>

    <?php
    class Aboutus{
        function __construct(){

        }        
    }
   ?>
</body>
</html>