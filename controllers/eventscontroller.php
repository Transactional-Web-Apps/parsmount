<?php

   // namespace controllers\User;
    // We need to acces both User Model and View    
    require(dirname(__DIR__)."/models/event.php");
    

    // Controller class
    class EventsController {

        private $data;

        function index($action, $params, $payload){
            // Get user data so that it is used by the View
            $event = new Event();
            
            // The possible actions are, corresponding to CRUD actions:
            // List to get the data (Retrieve)
            // Create to insert data
            // Update to update data
            // Delete to delete data

            //$this->$action($params, $payload);

            if($action == "list" || $action == "createevent")  
                //if(!empty($payload)) //////////////////////////////////////////////////////////////
                    $this->data = $event->$action($params, $payload);   // var_dump($params);

            // Determine which View to load.

            if($action == "list"){  
                // Instead of doing this:
                // require(dirname(__DIR__)."/views/".users.".php");
                // we could use class_exists which invokes spl_autoload_register in index.php
                if(class_exists("ListEvent")){    
                    $eventview = new ListEvent($this->data, $params[1]);  
                } 
            }

            if($action == "createevent"){
                // Instead of doing this:
                // require(dirname(__DIR__)."/views/".users.".php");
                // we could use class_exists which invokes spl_autoload_register in index.php
                if(class_exists("CreateEvent")){
                    $eventrview = new CreateEvent($this->data, $params[1]); 
                }            
            }


        }
    }

    // test controller an view interaction

    // $usercontroller = new UserController();

    // $usercontroller->index();

?>