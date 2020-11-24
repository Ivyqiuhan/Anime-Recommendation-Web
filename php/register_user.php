<?php

include_once("mysqli_connect.php");
    
    function handleRegisterRequest() {
        global $dbc;
        
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pw = $_POST['pw'];
        // TODO name check
        echo $userName;
        $sql = "INSERT INTO User (User_name,Password,Email,Phone_number) VALUES ('$userName','$pw','$email','$phone');";
        $result = mysqli_query($dbc,$sql )or die(mysqli_error($dbc));

        if($result){
            header("Location: ../LoginPage.php?register=success");
        }else{
            header("Location: ../Register.php?register=fail");
        }
        
        mysqli_close($dbc);
    }



    function handlePOSTRequest() {
        if (array_key_exists('submitRegisterRequest', $_POST)) {
            handleRegisterRequest();
        }
    }

    if (isset($_POST['registerSubmit'])) {
        handleRegisterRequest();
    }

?>
