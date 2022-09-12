<!DOCTYPE HTML>
<HTML>
<head>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
</head>
<body>

    <h1> This is a user View</h1>

    <?php
    
        // This code will display the User data in a table
        // The table will be built dynamically

        class UsersView{

          public $data;

          function __construct($data){

            $this->data = $data;

            $this->render();

          }

          function render(){
            $html = "<table>";
            $html .= "<tr>";
            $html .= "<td>username</td>
                      <td>password</td>
                      <td>email</td>";
            $html .= "</tr>";
    
            foreach($this->data as $user){
    
              $html .= "<tr>";
              $html .= "<td>".$user->username."</td>"
                       ."<td>".$user->password."</td>"
                       ."<td>".$user->email."</td>";
              $html .= "</tr>";         
    
            }
            $html .= "</table>";
    
            echo $html;
    
            echo '<a href="'.ROOTURL.'/users/create/'.'">Create a User</a>';

          }

        }

    ?>


</body>

</HTML>