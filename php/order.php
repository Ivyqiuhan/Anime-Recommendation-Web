<?php 
require_once('mysqli_connect.php');
    
    //3-Join
    function handleJoinRequest() {
        global $dbc;
        
        //TODO: get $costomer_number from dropdown
        //$costomer_number = 2;
        $costomer_number = $_POST['rank'];
       
        $query = "SELECT u.User_name, m.Name, m.Price FROM Merchandise m, User u WHERE u.User_id = $costomer_number;";

        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            
            echo '<table style= "width: 1000px;" align="center">
           
            <tr><td style="font-size: 20px; padding-top: 20%;" align="left"><b>User Name</b></td>
            <td style="font-size: 20px; padding-top: 20%;" align="left"><b>Merchandise Genre</b></td>
            <td style="font-size: 20px; padding-top: 20%;" align="left"><b>Price</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 20px;" align="left">' .
              $row['User_name'] . '</td><td style="font-size: 20px;" align="left">' .
              $row['Name'] . '</td><td style="font-size: 20px;" align="left">' .
              $row['Price'] . '</td><td style="font-size: 20px;" align="left">';
             
              echo '</tr>';
          }
            echo '</table>';
        } else {
            echo "Couldn't issue database query<br />";
            
            echo mysqli_error($dbc);

        }
        mysqli_close($dbc);
    }
    
    // HANDLE ALL POST ROUTES
// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
    function handlePOSTRequest() {
        if (array_key_exists('submitJoinRequest', $_POST)) {
            handleJoinRequest();
        }
    }

    if (isset($_POST['joinSubmit'])) {
        handlePOSTRequest();
    }

?>
