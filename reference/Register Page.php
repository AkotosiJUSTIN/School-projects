<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle.css">  
</head>
<body class="p-5">
    <div class="container mt-2">
        <h1 class="text-center">List of Records</h1><br>
        <a href="Registration Form.php" class="btn btn-primary mb-1">Add Record</a>

        <table class="table table-bordered">
            <tr class="table-dark">
                <td>ID</td>
                <td>User</td>
                <td>Action</td>
            </tr>

            <?php
            include "Connect.php";

            $sql = "SELECT * FROM datasheet";
            $query = mysqli_query($con, $sql);
           
            if($query -> num_rows > 0){
                while($row = $query -> fetch_assoc()){
            ?>
                <tr>
                    <td>
                    <?php echo $row['id']; ?> <br>
                    </td>

                    <td>
                    Name: <?php echo $row['lastName']; ?> 
                    <?php echo $row['firstName']; ?>
                    <?php echo $row['middleName']; ?>
                    <?php echo $row['suffixName']; ?> <br>

                    Address: <?php echo $row['houseNo']; ?>
                    <?php echo $row['street']; ?>
                    <?php echo $row['barangay']; ?>
                    <?php echo $row['town']; ?>
                    <?php echo $row['province']; ?>
                    <?php echo $row['zipcode']; ?> <br>

                    Gender: <?php echo $row['gender']; ?> <br>
                    Date of Birth: <?php echo $row['birthDate']; ?> <br>
                    Place of Birth: <?php echo $row['birthPlace']; ?> <br>
                    Civil Status: <?php echo $row['civilStatus']; ?> <br>
                    Contact Number: <?php echo $row['contactNumber']; ?> <br>
                    Email: <?php echo $row['emailAdd']; ?>
                    </td>
                    
                    <td>
                        <a href="View.php?id=<?=$row['id']; ?>" class="btn btn-primary">View</a>
                        <a href="Edit.php?id=<?=$row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="Delete.php?id=<?=$row['id']; ?>" class="btn btn-danger" onclick="return confirm_delete()" name="Delete">Delete</a>
                    </td>
                </tr>
                        
            <?php
                }
            }
            else
            {
                echo "No Records Found";
            }
            ?>
        </table>
    </div>
</body>
</html>