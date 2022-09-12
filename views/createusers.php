<!DOCTYPE HTML>
<HTML>

<body>

    <form method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="text" id="password" name="password"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <input type="submit">
    </form>

<?php

    class CreateUsers {

        function __construct($data){

            // In our case $data for the create function is the number of rows affected / created
            $this->render($data);


          }       

        function render($data){       var_dump ($_POST);/////

            if(isset($_POST) && !empty($_POST)){  
                if($data > 0){

                    echo "The user was successfully created.";

                }else{

                    echo "There was an error creating the user.";

                }
            }
        
        }         

    }


?>

</body>

</HTML>