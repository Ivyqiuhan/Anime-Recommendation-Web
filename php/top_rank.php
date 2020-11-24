<?php 
require_once('mysqli_connect.php');
    //4-GroupBy
    function handleGroupByRequest() {
        global $dbc;
        
        //TODO: get $top_or_bottom as a string from dropdown
        //$top_or_bottom = 'MIN';
        $top_or_bottom = $_POST['MIN_OR_MAX'];
        //$Lowest = 'MAX';
        $query = "SELECT a.Name, $top_or_bottom(ar.Anime_Rank) AS Lowest_Rank FROM AnimeRank ar, Anime a WHERE a.Anime_ID = ar.Anime_ID GROUP BY a.Name;";
        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            
            echo '<table style= "width: 650px;" align="center">
           
            <tr><td style="font-size: 30px; padding-top: 20%;" align="left"><b>Anime Name</b></td>
            <td style="font-size: 30px; padding-top: 20%;" align="left"><b>Rank</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 30px;" align="left">' .
              $row['Name'] . '</td><td style="font-size: 30px;" align="left">' .
              $row['Lowest_Rank'] . '</td><td style="font-size: 30px;" align="left">';
             
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
        if (array_key_exists('submitGroupByRequest', $_POST)) {
            handleGroupByRequest();
        }
    }

    if (isset($_POST['groupSubmit'])) {
        handlePOSTRequest();
    }
    
?>
