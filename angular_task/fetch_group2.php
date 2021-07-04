<?php

//fetch_group.php

include('database_connection.php');

$form_data = json_decode(file_get_contents("php://input"));
    
$query = "SELECT * FROM users WHERE group_id='2'";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

if($statement->execute())
{
    while($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $data[] = $row;
    }

    echo json_encode($data);
}
?>