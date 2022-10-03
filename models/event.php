<?php

    // What is the difference between include and require?
    // include will not break the code if the file doesn't exist
    // require the code in this fille will not execute if the required file doesn't exist
    
    // __DIR__ gives the path to the current directory: htdocs/mvcapp/models
    // dirname gives the path to the parent directory of the parameter
    //// dirname(__DIR__): htdocs/mvcapp
    
    require(dirname(__DIR__)."/core/database/dbconnectionmanager.php");

    class Event {

        public $id;
        public $name;
        public $place;
        public $description;   
        public $picture;

        private $conn;

        function __construct(){  

            $connectionManager = new DBConnectionManager();

            $this->conn = $connectionManager->getConnection(); 

        }

        function list($params, $data){       

            if(empty($params[1])){          //var_dump($data);        //echo '<script>alert('.$params[1].');</script>';
                if(empty($data)) {
                    $query = "select * from events";
                    $statement = $this->conn->prepare($query);
                    $statement->execute();
                }
                else
                {
                    $d = explode("=", $data);
                    $query = "select * from events where id = :id";
                    $statement = $this->conn->prepare($query) ; 
                    $statement->execute([ 'id' => $d[1] ]);

                }
            }
            else{                                  
                $query = "select * from events where id = :id";
                $statement = $this->conn->prepare($query) ; 
                $statement->execute([ 'id' => $params[1] ]);
            }
			
			return $statement->fetchAll(PDO::FETCH_CLASS);           

        }

        function createevent($params, $data){  

            if(!empty($data)){

                $query = "insert into events (name, place, description, picture) values (:name, :place, :description, :picture)";
                $statement = $this->conn->prepare($query);
                
                parse_str($data, $dataArray); 

                $statement->execute([ 'name' => $dataArray["name"]
                    ,'place' => $dataArray["place"] 
                    , 'description' => $dataArray["description"]
                    , 'picture' => $dataArray["picture"] 
                    ]);

                // Return the number of rows created    
                return $statement->rowCount();
                
            }

            return 0;

        }
    }
 
?>