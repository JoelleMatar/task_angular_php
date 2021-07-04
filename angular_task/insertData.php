<?php

//insert.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));

$error = '';
$message = '';
$firstName = '';
$lastName = '';
$email = '';


if(empty($error))
{
    if($form_data->action == 'Delete')
    {
        $query = "DELETE FROM users WHERE id='".$form_data->id."'";

        $statement = $connect->prepare($query);
        if($statement->execute())
        {
            $output['message'] = 'Data Deleted';
        }
    }

    $output = array(
        'error'  => "error",
        'message' => $message
    );

    echo json_encode($output);
}

?>