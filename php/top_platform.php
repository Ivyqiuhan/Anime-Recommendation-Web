<?php 
require_once('mysqli_connect.php');
    
    //7-Division
    function handleDivisionRequest() {
        global $dbc;
        
        //No POST needed, print the result directly
        $query = "SELECT bp.Name FROM BroadcastPlatform bp WHERE NOT EXISTS (SELECT a.Anime_ID FROM Anime a WHERE NOT EXISTS (SELECT ar.Anime_ID FROM AnimeRank ar WHERE ar.Broadcast_website = bp.Name AND a.Anime_ID = ar.Anime_ID));";
        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            
            echo '<table align="center">
           
            <tr><td style="font-size: 30px; padding-top: 20%;" align="left"><b>Broadcast Platform</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 30px;" align="center">' .
              $row['Name'] . '</td><td align="left">';
             
              echo '</tr>';
          }
            echo '</table>';
        } else {
            echo "Couldn't issue database query<br />";
            
            echo mysqli_error($dbc);

        }
        mysqli_close($dbc);
    }
    
    if (isset($_POST['divisionSubmit'])) {
        handleDivisionRequest();
    }
?>
