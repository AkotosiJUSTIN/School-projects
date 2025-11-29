<?php
include "Connect.php";

if(isset($_POST['Submit']))
{
    $id = mysqli_real_escape_string($con, $_POST['id']);

    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $middleName = mysqli_real_escape_string($con, $_POST['middleName']);
    $suffixName = mysqli_real_escape_string($con, $_POST['suffixName']);

    $houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $town = mysqli_real_escape_string($con, $_POST['town']);
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);

    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $birthDate = mysqli_real_escape_string($con, $_POST['birthDate']);
    $birthPlace = mysqli_real_escape_string($con, $_POST['birthPlace']);
    $civilStatus = mysqli_real_escape_string($con, $_POST['civilStatus']);
    $contactNumber = mysqli_real_escape_string($con, $_POST['contactNumber']);
    $emailAdd = mysqli_real_escape_string($con, $_POST['emailAdd']);

    $sql = "UPDATE datasheet SET lastName='$lastName', firstName='$firstName',
    middleName='$middleName', suffixName='$suffixName', houseNo='$houseNo', street='$street',
    barangay='$barangay', town='$town', province='$province', zipcode='$zipcode',
    gender='$gender', birthDate='$birthDate', birthPlace='$birthPlace', civilStatus='$civilStatus',
    contactNumber='$contactNumber', emailAdd='$emailAdd' WHERE id='$id'";

    $query = mysqli_query($con, $sql);

    if($query)
    {
        echo "<h5 class='text-success>Record Successfully Updated</h5>";
    }
    else
    {
        echo "<h5 class='text-danger'>Failed to Update Record</h5>";
    }

    header("location: /CRUD/Register%20Page.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Data Sheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle.css">    
</head>
<body class="container p-5">
        <?php
            if(isset($_GET['id']))
            {
                $id = mysqli_real_escape_string($con, $_GET['id']);
                $sql = "SELECT * FROM datasheet WHERE id='$id'";
                $query = mysqli_query($con, $sql);

                if(mysqli_num_rows($query) > 0){
                    $id = mysqli_fetch_array($query);
            ?>

            <div class="border bg-light p-2" >
                <b><h1 class="text-center">PERSONAL DATA SHEET</h1></b>
            </div>

            <div class="bg-dark text-light p-3">
                <b><h4 class="text-center">I. PERSONAL INFORMATION</h4></b>
            </div>

            <table class="table table-bordered">
            <tr class="table-secondary">
                <td colspan=2><b>NAME</b></td>
            </tr>

            <tr>
                <td colspan=2><p><?=$id['firstName']?> <?=$id['middleName']?> <?=$id['lastName']?>
                <?=$id['suffixName']?></p></td>
            </tr>

            <tr class="table-secondary">
                <td colspan=2><b>ADDRESS</b></td>
            </tr>
                
            <tr>
                <td colspan=2><p><?=$id['houseNo']?> <?=$id['street']?> <?=$id['barangay']?> <?=$id['town']?>
                <?=$id['province']?> <?=$id['zipcode']?></p></td>
            </tr>

            <tr class="table-secondary">
                <td><b>GENDER</b></td>
                <td><b>CIVIL STATUS</b></td>
            </tr>

            <tr>
                <td><p><?=$id['gender']?></p></td>
                <td><p><?=$id['civilStatus']?></p></td>
            </tr>

            <tr class="table-secondary">
                <td><b>DATE OF BIRTH</b></td>
                <td><b>PLACE OF BIRTH</b></td>
            </tr>

            <tr>
                <td><p><?=$id['birthDate']?></p></td>
                <td><p><?=$id['birthPlace']?></p></td>
            </tr>

            <tr class="table-secondary">
                <td><b>CONTACT NUMBER</b></td>
                <td><b>EMAIL</b></td>
            </tr>

            <tr>
                <td><p><?=$id['contactNumber']?></p></td>
                <td><p><?=$id['emailAdd']?></p></td>
            </tr>
            </table>

            <tr>
                <center>
                <a href="Register Page.php" class="btn btn-primary col-md-3"  name="Back">BACK</a>
                </center>
            </tr>
        <?php
            }
        }
        ?>
</body>
</html>