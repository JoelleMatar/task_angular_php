<?php
    $connect = mysqli_connect("localhost", "root", "", "crud_angular");
    echo $connect ? 'connected' : 'not connected';

    // $data = json_decode(file_get_contents("php://input"));

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    // $id = $_POST['id'];

    $query = "UPDATE `users` SET `firstName` = '$firstName', `lastName` = '$lastName', `email` = '$email' WHERE `id` = '38'";

    // if ($connect->query($query) === FALSE) {
    //     $response = array ('response'=>'error', 'message'=>$query);
    //     echo json_encode($response);
    // }

    if(mysqli_query($connect, $query))
    {
        echo 'User Updated';
        header("Refresh:0; url=test.html");
    }
    else
    {
        echo 'Error';
    }
?>