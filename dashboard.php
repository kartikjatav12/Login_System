<?php

    // My Login System ****************************************************

    session_start();

    if(isset($_SESSION["username"])){
        echo "LoginIn";
    }else{
        header("Location: ../index.php");
    }

    if(isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $query = $_SERVER["QUERY_STRING"];
        $arr = explode("=",$query);
        $uname = $arr[1];
    ?>
    <img src="../assets/userData/userImages/<?php echo $uname ?>.png"/>
    <p>Welcome <?php echo $uname ?>!</p>
    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
        <input type="submit" value="Logout" name="logout"/>
    </form>
</body>
</html>