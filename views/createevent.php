
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
    <title>Parsmount Website - Create Event</title>
</head>

<body>
    <header>
        Parsmount
    </header>

    <nav>        
    <?php
            echo '<a href="'.ROOTURL.'/home/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/events/list/">Event</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/createevent/" id="current">Create Event</a>&nbsp;&nbsp;&nbsp;&nbsp;';      
            echo '<a href="'.ROOTURL.'/contact/">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/aboutus/">About us</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            //echo '<a href="'.ROOTURL.'/signin/">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
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
            } else
                echo '<a href="'.ROOTURL.'/signin/">Sign in</a>&nbsp;&nbsp;&nbsp;&nbsp;';
        ?>
    </nav>

    <main>

        <div class="container">

        <div class="login-box">   

        <div class="row" >   
            <div class="col-md-6"> 
            <br><br>
            <h2> Create Event </h2>
            <br>
            <form action="http://localhost/parsmount/events/createevent/" method="post">
                <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" required />
                </div>
                
                <div class="form-group">
                    <label>Place</label>
                    <input type="text" name="place" id="place" class="form-control" required />
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" id="description" class="form-control" required />
                </div>
                <div class="form-group">
                    <br>
                    <label for="myfile">Select a picture:</label>
                    <input type="file" name="picture" id="picture">
                    <br>
                </div>
                    
                <button  type="submit" class="btn btn-primary"> Create </button>
                &nbsp;&nbsp;
                <!-- <a href="signup.php" style="color:blue">Sign up</a> -->

            </form>
            </div>

        </div>
        </div>
        </div>


    </main>

    <footer>
        <p><i>
                Copyright &copy; 2022 Parsmount <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer>

    <?php
    class CreateEvent{
        function __construct($data){
            // In our case $data for the create function is the number of rows affected / created
            $this->render($data);
        }       

        function render($data){     
            if(isset($_POST) && !empty($_POST)){  
                if($data > 0){
                    echo '<script>alert("The event was successfully created.")</script>';                    
                }
				else{                    
                    echo '<script>alert("There was an error creating the event.")</script>';
                }
            }        
        }          
    }
   ?>

</body>

</html>