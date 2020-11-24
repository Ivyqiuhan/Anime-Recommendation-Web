<?php 
require_once('mysqli_connect.php');
    
    function handleSelectionRequest() {
        global $dbc;
        
        //TODO: get $target_rank from dropdown
        //$target_rank = 40;
        $target_rank = $_POST['rank'];
        $query = "SELECT a.Name, Anime_Rank, Category_name FROM AnimeRank ar, Anime a WHERE ar.Anime_ID=a.Anime_ID and Anime_Rank <= " . $target_rank . " ORDER BY Anime_Rank;";
        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            echo '<table style= "width: 900px;" align="center">
           
            <tr><td style="font-size: 30px; padding-top: 20%;" align="left"><b>Anime Name </b><br></td>
            <td style="font-size: 30px; padding-top: 20%;" align="conter"><b>Rank Type</b><br></td>
            <td style="font-size: 30px; padding-top: 20%;" align="right"><b>Rank</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 30px;" align="left">' .
              $row['Name'] . '</td><td style="font-size: 30px;" align="left">'.
              $row['Category_name'] . '</td><td style="font-size: 30px;" align="left">'.
              $row['Anime_Rank'] . '</td><td style="font-size: 30px;" align="left">';
             
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
        if (array_key_exists('submitQueryRequest', $_POST)) {
            handleSelectionRequest();
        }
    }

    if (isset($_POST['rankSubmit'])) {
        handlePOSTRequest();
    }
?>
