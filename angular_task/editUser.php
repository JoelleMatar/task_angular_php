<!DOCTYPE html>
<!-- index.php !-->
<html>

<head>
    <title>Webslesson Tutorial | AngularJS Tutorial with PHP - Fetch / Select Data from Mysql Database</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script> -->
</head>

<body>
    <br /><br />
    <div class="container" style="width:500px;">
        <h3 align="center">AngularJS Tutorial with PHP - Fetch / Select Data from Mysql Database</h3>
        <div ng-app="myapp" ng-controller="usercontroller">
            <form method="post" action="edit.php">
                <?php 

                    include('database_connection.php');

                    $form_data = json_decode(file_get_contents("php://input"));
                        
                    $query = "SELECT * FROM users WHERE id='38'";

                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                        $output['firstName'] = $row['firstName'];
                        $output['lastName'] = $row['lastName'];
                        $output['email'] = $row['email'];
                    }
                ?>
                <label>First Name</label>
                <input type="text" name="firstName" ng-model="firstName" class="form-control" value="<?php echo $output['firstName']; ?>" />
                <br />
                <label>Last Name</label>
                <input type="text" name="lastName" ng-model="lastName" class="form-control"  value="<?php echo $output['lastName']; ?>" />
                <br />
                <label>Email</label>
                <input type="text" name="email" ng-model="email" class="form-control" value="<?php echo $output['email']; ?>"  />
                <br />
                <input type="submit" name="btnEdit" class="btn btn-info" value="Edit User" />
            </form>
        </div>
    </div>
</body>

</html>