<?php

   // namespace controllers\User;
    // We need to acces both User Model and View
    require(dirname(__DIR__)."/models/user.php");

    // Controller class
    class UsersController {

        private $data;

        function index($action, $params, $payload){
            // Get user data so that it is used by the View
            $user = new User();
            
            // The possible actions are, corresponding to CRUD actions:
            // List to get the data (Retrieve)
            // Create to insert data
            // Update to update data
            // Delete to delete data

            //$this->$action($params, $payload);

            $this->data = $user->$action($params, $payload);

            // Determine which View to load.
            if($action == "list"){

                // Instead of doing this:
                // require(dirname(__DIR__)."/views/".users.".php");
                // we could use class_exists which invokes spl_autoload_register in index.php
                if(class_exists("UsersView")){ 
                    $userview = new UsersView($this->data);
                }
            
            }
                else if ($action == "create"){
                    
                   // require(dirname(__DIR__)."/views/".$action."users".".php");
                   if(class_exists("CreateUsers"))
                        $userview = new CreateUsers($this->data);
                
                }

        }

    }

    // test controller an view interaction

    // $usercontroller = new UserController();

    // $usercontroller->index();

?>