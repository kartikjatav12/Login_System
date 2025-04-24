<?php

    // My Login System ****************************************************

    require("functions.php");

    if(isset($_POST["register"])){
        $uname = $_POST["name"];
        $pass = $_POST["password"];
        $phone = $_POST["phone"];
        $img = $_FILES["file"];
        $email = $_POST["email"];
        $con_pass = $_POST["confirm_password"];

        $userData = array("uname"=>$uname,"password"=>password_hash($pass,PASSWORD_BCRYPT),"email"=>$email);

        if(CheckExistingUser($uname)){
            header("Location: index.php?user=alreadyExists");
            exit();

        }
        else{
            if(checkpass($pass,$con_pass)){
                if(saveUserPhoto($img["tmp_name"],$uname,pathinfo($img["name"],PATHINFO_EXTENSION))){
                    if(SaveData($userData)){

                        header("Location: ./templates/dashboard.php?uname=$uname");

                        session_start();
                        $_SESSION["username"] = $uname;
                    }
                    else{
                        header("Location: index.php?some=error");
                    }
                }
                else{
                    header("Location: index.php?file=error");
                }
            }
            else{
                header("Location: index.php?con=false");
            }
        }
    }
                    

?>