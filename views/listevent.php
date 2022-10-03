 

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
    <style>
        table, th, td {
        border:1px solid black;
        }
    </style>
</head>

<body>
    <header>
        Parsmount
    </header>

    <nav>        
    <?php
            echo '<a href="'.ROOTURL.'/home/">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;';
            echo '<a href="'.ROOTURL.'/events/list/" id="current">Event</a>&nbsp;&nbsp;&nbsp;&nbsp;';     
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
        <?php  

            if(isset($_SESSION["username"]))                        
                echo '<a href="'.ROOTURL.'/createevent/" style="color:blue">Create event</a>';               
        ?>
        

<?php
    class ListEvent{
         public $data;

          function __construct($data){

            $this->data = $data;

            $this->render();

          }

          function render(){
            $html ='<div class="container">
                    <div class="login-box">            
                    <div class="row" >   
                    <div class="col-md-6">
                    <form action="http://localhost/parsmount/events/list/" method="post">
                        <div class="form-group">
                                <label>Find Event</label>
                                <input type="text" name="id" id="id" class="form-control" required />
                        </div>
                        <button  type="submit" class="btn btn-primary"> Find </button>
                        </form> <br><br>';

            $html .= "<table>";
            $html .= "<tr>";
            $html .= "<td><b>name</b></td>
                      <td><b>place</b></td>
                      <td><b>description</b></td>
                      <td><b>Picture</b></td>";
            $html .= "</tr>";
    
            foreach($this->data as $event){              
              $html .= "<tr>";
              $html .= "<td>".$event->name."</td>"
                       ."<td>".$event->place."</td>"
                       ."<td>".$event->description."</td>"
                       .'<td><img src="'.ROOTURL.'/Resources/'.$event->picture.'" height=150 width=200></td>';
              $html .= "</tr>";         
    
            }
            $html .= "</table>";
            
            $html .='</div>                
                    </div>
                    </div>
                    </div>';

            $html .= '</main>

                        <footer>
                            <p><i>
                                    Copyright &copy; 2022 Parsmount <br>
                                    <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
                                </i></p>
                        </footer>';

    
            echo $html;
    
            //echo '<a href="'.ROOTURL.'/events/create/'.'">Create a User</a>';

          }        
    }
   ?>


    <!-- </main>

    <footer>
        <p><i>
                Copyright &copy; 2022 Parsmount <br>
                <a href="mailto:yourfirstname@yourlastname.com">yourfirstname@yourlastname.com</a>
            </i></p>
    </footer> -->
 

</body>

</html>