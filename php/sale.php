<?php 
require_once('mysqli_connect.php');
    
    //6-NestedGroupBy
    function handleNestedGroupByRequest() {
        global $dbc;
        //TODO: get $max_or_min from dropdown
        //max : <=
        //min : >=
        //$max_or_min = '<=';
        $max_or_min = $_POST['MIN_OR_MAX'];
        
        $query = "SELECT Category, AVG(Price) FROM Merchandise m GROUP BY Category HAVING AVG(Price) $max_or_min ALL (SELECT AVG(m.Price) FROM Merchandise m GROUP BY m.Category);";
        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            
            echo '<table style= "width: 500px;" align="center">
           
            <tr><td style="font-size: 25px; padding-top: 20%;" align="left"><b>Merchandise Category </b><br></td>
            <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Average Price</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 25px;" align="left">' .
              $row['Category'] . '</td><td style="font-size: 25px;" align="left">' .
              $row['AVG(Price)'] . '</td><td style="font-size: 25px;" align="left">';
             
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
        if (array_key_exists('submitNestedGroupByRequest', $_POST)) {
            handleNestedGroupByRequest();
        }
    }

    if (isset($_POST['nestedGroupSubmit'])) {
        handlePOSTRequest();
    }
    

?>
