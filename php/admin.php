
<?php
        require_once 'mysqli_connect.php';

        function handleUpdateRequest() {
            global $dbc;
            
            $old_anime_name = $_POST['animeName'];

            $new_anime_name = $_POST['newAnimeName'];
            $new_publish_date = $_POST['newPublishDate'];
            $new_episode = $_POST['newEpisode'];
            $new_genre = $_POST['newGenre'];
            // TODO name check
            $query = "UPDATE Anime SET Name='" . $new_anime_name . "', Publish_date='" . $new_publish_date . "', Episode='" . $new_episode . "', Genre='" . $new_genre . "' WHERE Name='" . $old_anime_name . "'";
            $response = @mysqli_query($dbc, $query);
            if ($response) {
                echo "Anime table updated successfully";
            } else {
                echo "Error updating anime table: " . mysqli_error($dbc);
            }
            
            mysqli_close($dbc);
        }

        function handleInsertRequest() {
            global $dbc;

            $ins_anime_name = $_POST['insAnimeName'];
            $ins_publish_date = $_POST['insPublishDate'];
            $ins_episode = $_POST['insEpisode'];
            $ins_genre = $_POST['insGenre'];

            $check_query = "SELECT Anime WHERE Name = '" . $ins_anime_name ."' AND Publish_date = '" . $ins_publish_date . "' AND Episode = '" . $ins_episode . "' AND Genre = '" . $ins_genre . "'";
            $check_response = @mysqli_query($dbc, $check_query);
            $repeated = false;
            if ($check_response){
                echo "Anime table has connected the anime";
                $repeated = true;
            }

            if (!$repeated){
                $query = "INSERT INTO Anime (Name, Publish_date, Episode, Genre) VALUES ('" . $ins_anime_name . "', '" . $ins_publish_date . "', '" . $ins_episode . "', '" . $ins_genre . "')";
                $response = @mysqli_query($dbc, $query);

                if ($response) {
                    echo "Anime table inserted successfully";
                } else {
                    echo "Error inserting anime table: " . mysqli_error($dbc);
                }
            }
            mysqli_close($dbc);
        }

        function handleShowRequest() {
            global $dbc;

            $query = "SELECT * FROM Anime";
            $response = @mysqli_query($dbc, $query);
            if($response){
                echo '<table style= "width: 700px;" align="center">
           
                <tr><td style="font-size: 25px; padding-top: 20%;" align="left"><b>Broadcast Platform</b></td>
                <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Anime ID</b></td>
                <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Publish Date</b></td>
                <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Episode</b></td>
                <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Name</b></td>
                <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Genre</b></td>
                </tr>';
                while($row = mysqli_fetch_array($response)){
                    echo '<tr><td style="font-size: 25px;" align="left">' .
                    $row['Anime_ID'] . '</td><td style="font-size: 25px;" align="left">' .
                    $row['Publish_date'] . '</td><td style="font-size: 25px;" align="left">' .
                    $row['Episode'] . '</td><td style="font-size: 25px;" align="left">' .
                    $row['Name'] . '</td><td style="font-size: 25px;" align="left">' .
                    $row['Genre'] . '</td><td style="font-size: 25px;" align="left">';
            
                }
                echo '</table>';
            }

            mysqli_close($dbc);
        }

        function handleShowNameRequest() {
            global $dbc;

            $query = "SELECT Name FROM Anime";
            $response = @mysqli_query($dbc, $query);
            if($response){
                echo '<table style= "width: 500px;" align="center">
                <td style="font-size: 25px; padding-top: 20%;" align="left"><b>Anime Name</b></td></tr>';
                while($row = mysqli_fetch_array($response)){
                    echo '<tr><td style="font-size: 25px;" align="left">' . $row['Name']. '</td><td style="font-size: 25px;" align="left">';
                }
            }

            mysqli_close($dbc);
        }

        // HANDLE ALL POST ROUTES
	// A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handlePOSTRequest() {
            if (array_key_exists('updateQueryRequest', $_POST)) {
                handleUpdateRequest();
            } else if (array_key_exists('insertQueryRequest', $_POST)) {
                handleInsertRequest();
            }
        }

        // HANDLE ALL GET ROUTES
	    // A better coding practice is to have one method that reroutes your requests accordingly. It will make it easier to add/remove functionality.
        function handleGETRequest() {
            if (array_key_exists('showTuples', $_GET)) {
                handleShowRequest();
            }
            if (array_key_exists('checkSubmit', $_GET)) {
                handleShowNameRequest();
            }
        }

		if (isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
            handlePOSTRequest();
        } else if (isset($_GET['showTupleRequest']) || isset($_GET['checkSubmitRequest'])) {
            handleGETRequest();
        }
?>

