<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Display</title>
</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from crud";
                $result = mysqli_query($con,$sql);
                if($result){
                   while($row=mysqli_fetch_assoc($result)){
                       $id=$row['id'];
                       $name=$row['name'];
                       $email=$row['email'];
                       $mobile=$row['mobile'];
                       echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$email.'</td>
                                <td>'.$mobile.'</td>
                                <td>
                                <button class="btn btn-primary">
            <a href="update.php?updateid='.$id.'" class="text-light">Udpate User</a>
        </button>
                                </td>
                                <td>
                                <button class="btn btn-danger">
            <a href="delete.php?deleteid='.$id.'" class="text-light">Delete User</a>
        </button>
                                </td>
                                
                            </tr>';
                   }
                }


?>
            </tbody>
        </table>
    </div>
</body>

</html>