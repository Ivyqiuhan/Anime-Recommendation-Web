<?php 
require_once('mysqli_connect.php');
    //2-projection
    function handleProjectionRequest() {
        global $dbc;
        
        //TODO: get $$genre, $platform, $rank_type from dropdown
//        $genre = 'Action';
//        $platform = 'Youtube';
//        $rank_type = 1;
        $genre = $_POST['genre'];
        $platform = $_POST['platform'];
        $rank_type = $_POST['rank'];
        
        
        
        #$query = "SELECT DISTINCT a.Name, a.Genre,ar.Category_name, bp.Name AS BroadcastPlatform FROM BroadcastPlatform bp, Anime a, AnimeRank ar WHERE a.Genre ='". $genre."' and bp.Name = '".$platform."' and ar.Rank_ID = '".$rank_type."';";
        $query = "SELECT DISTINCT a.Name, a.Genre,ar.Category_name, bp.Name AS BroadcastPlatform FROM BroadcastPlatform bp, Anime a, AnimeRank ar WHERE a.Genre =$genre and bp.Name = $platform and ar.Rank_ID = $rank_type;";

        #echo 'This example is created by Ivy.';
        
        $response = @mysqli_query($dbc, $query);
        if($response){
            
            echo '<table style= "width: 900px;" align="center">
           
            <tr><td style="font-size: 30px; padding-top: 20%;" align="left"><b>Broadcast Platform</b></td>.<br>.
            <td style="font-size: 30px; padding-top: 20%;" align="left"><b>Anime Genre</b></td><br>
            <td style="font-size: 30px; padding-top: 20%;" align="left"><b>Rank</b></td></tr>';

          while($row = mysqli_fetch_array($response)){
              echo '<tr><td style="font-size: 30px;" align="left">' .
              $row['Name'] . '</td><td style="font-size: 30px;" align="left">' .
              $row['Genre'] . '</td><td style="font-size: 30px;" align="left">' .
              $row['Category_name'] . '</td><td align="left">';
             
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
        if (array_key_exists('submitProjectionRequest', $_POST)) {
            handleProjectionRequest();
        }
    }

    if (isset($_POST['projectionSubmit'])) {
        handlePOSTRequest();
    }
?>
