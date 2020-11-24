<?php 
require_once('mysqli_connect.php');
    
    //5-Having
    function handleHavingRequest() {
        global $dbc;
        
        //TODO: get $count as number from dropdown
        //$count = 1;
        $count = $_POST['count'];
        
        $query = "SELECT c.Type, COUNT(c.Type) FROM Creator c GROUP BY c.Type HAVING COUNT(c.Type) > $count;";
        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            
            echo '<table style= "width: 400px;" align="center">
            
            <tr><td style="font-size: 30px; padding-top: 20%;" align="left"><b>Creator Type </b><br></td>
            <td style="font-size: 30px; padding-top: 20%;" align="left"><b>Count</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 30px;" align="left">' .
              $row['Type'] . '</td><td style="font-size: 30px;" align="left">' .
              $row['COUNT(c.Type)'] . '</td><td  style="font-size: 30px;"align="left">';
             
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
        if (array_key_exists('submitHavingRequest', $_POST)) {
            handleHavingRequest();
        }
    }


    if (isset($_POST['havingSubmit'])) {
        handlePOSTRequest();
    }
    
?>
