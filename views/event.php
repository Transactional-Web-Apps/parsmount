

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="icon.jpg" type="image/x-jpg">
    <link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <?php
    echo '<link rel="stylesheet" href="'.ROOTURL.'/Resources/parsmount.css">';
    ?>     
    <title>Parsmount Website - Event</title>
</head>

<body>
    <header>
        Parsmount
    </header>

    <nav>        
    <?php
            echo '<a href="'.ROOTURL.'/home/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/event/" id="current">Event</a>&nbsp;&nbsp;&nbsp;&nbsp;';     
            echo '<a href="'.ROOTURL.'/contact/">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/aboutus/">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;';
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

    <main>


    </main>

    <footer>
        <p><i>
                Copyright &copy; 2022 Parsmount <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer>

    <?php
    class Event{
        function __construct(){

        }        
    }
   ?>

</body>

</html>