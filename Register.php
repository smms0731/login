<?php 
    $con = mysqli_connect("localhost", "minseok731", "alstjr32!!", "minseok731");
    mysqli_query($con,'SET NAMES utf8');

    $userID = $_POST["userID"];
    $userPassword = $_POST["userPassword"];
    $userName = $_POST["userName"];
    $userAge = $_POST["userUniv"];

    $statement = mysqli_prepare($con, "INSERT INTO USER VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($statement, "sssi", $userID, $userPassword, $userName, $userUniv);
    mysqli_stmt_execute($statement);


    $response = array();
    $response["success"] = true;
 
   
    echo json_encode($response);



?>
