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

            if($action == "list" || $action == "createuser" || $action == "getuser")
                if(!empty($payload))
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
            else if ($action == "createuser"){                    
                // require(dirname(__DIR__)."/views/".$action."users".".php");
                if(class_exists("Signup"))
                    $userview = new Signup($this->data);                
            }

            else if ($action == "getuser"){
                //var_dump($this->data[0]->username);                
                // require(dirname(__DIR__)."/views/".$action."users".".php");
                if (!empty($this->data)) {
                    //session_name("parsmount".$this->data[0]->username);                    
                    session_start();
                    $_SESSION["username"] = $this->data[0]->username;
                    if(class_exists("Home"))
                        $userview = new Home($this->data); 
                } else
                    if(class_exists("Signin"))
                            $userview = new Signin();               
            }

            else if ($action == "home"){  
                if(class_exists("Home"));
                    //$userview = new Home();                 
            }

            else if ($action == "aboutus"){  
                if(class_exists("Aboutus"));
                    //$userview = new Aboutus();                 
            }

            else if ($action == "contact"){  
                if(class_exists("Contact"));
                    //$userview = new Contact();                 
            }

            else if ($action == "event"){  
                if(class_exists("Event"));
                    //$userview = new Event();                 
            }

            // else if ($action == "signin"){  
            //     if(class_exists("Signin"));
            //         $userview = new Signin();                 
            // }

            // else if ($action == "signup"){  
            //     if(class_exists("Signup"));
            //         $userview = new Signup();                 
            // }

            else if ($action == "logout"){  
                if(class_exists("Logout"));
                    //$userview = new Logout();                 
            }

        }
    }

    // test controller an view interaction

    // $usercontroller = new UserController();

    // $usercontroller->index();

?>