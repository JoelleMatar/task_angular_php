<?php 
    $connect = mysqli_connect("localhost", "root", "", "crud_angular");
    echo $connect ? 'connected' : 'not connected';

    $data = json_decode(file_get_contents("php://input"));

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $groupId = $_POST['group_id'];

    $query = "INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `group_id`) VALUES (NULL, '$firstName', '$lastName', '$email', '$groupId');";


    // if ($connect->query($query) === FALSE) {
    //     $response = array ('response'=>'error', 'message'=>$groupId);
    //     echo json_encode($response);
    // }

    if(mysqli_query($connect, $query))
    {
        echo 'Data Inserted';
        header("Refresh:0; url=test.html");
    }
    else
    {
        echo 'Error';
    }
?>