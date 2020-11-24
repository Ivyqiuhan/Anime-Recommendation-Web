<?php

include_once("mysqli_connect.php");
    
    function handleLoginUserRequest() {
        global $dbc;
        
        $userName = $_POST['userName'];
        $password = $_POST['pw'];
        $sql = "SELECT User_name, Password FROM User WHERE User_name = '".$userName."' AND  Password = '".$password."'";
        $response = @mysqli_query($dbc, $sql);
       
        
        if(mysqli_num_rows($response) > 0)
        {
            if($userName == "Admin"){
                header("Location: ../admin.php?login=success");
            }else{
                header("Location: ../top_platform.php?login=success");
            }
        }
        else
        {
           
            header("Location: ../Register.php?login=fail");
            echo 'The username or password are incorrect!';
        }
        
        
        
        mysqli_close($dbc);
    }


    
    function handlePOSTRequest() {
        if (array_key_exists('submitLoginUserRequest', $_POST)) {
            handleLoginUserRequest();
        }
    }

    if (isset($_POST['loginUserSubmit'])) {
        handleLoginUserRequest();
    }





