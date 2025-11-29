<?php
include "Connect.php";

if(isset($_POST['Update_Submit']))
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
    <title>Update Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle.css">    
</head>
<body class="container p-5">

    <form method="POST" class="border bg-light p-5">

        <div class="bg-dark text-light text-center p-3">
            PERSONAL DATA SHEET
        </div>

        <div class="bg-secondary text-light p-2">
            <b>I. PERSONAL INFROMATION </b>
        </div>

        <?php
        if(isset($_GET['id']))
        {
            $id = mysqli_real_escape_string($con, $_GET['id']);
            $sql = "SELECT * FROM datasheet WHERE id='$id'";
            $query = mysqli_query($con, $sql);

            if(mysqli_num_rows($query) > 0){
                $id = mysqli_fetch_array($query);
        ?>

            <form action="Registration Form.php" method="POST">
            <!-- NAME -->
            <div class="row mt-3">

            <div>
                <input type="hidden" class="form-control" name="id" value="<?=$id['id']?>">
            </div>

            <div class="col-lg">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName" value="<?=$id['lastName']?>">
            </div>

            <div class="col-lg">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="firstName" value="<?=$id['firstName']?>">
            </div>

            <div class="col-lg">
                <label class="form-label">Middle Name:</label>
                <input type="text" class="form-control" name="middleName" value="<?=$id['middleName']?>">
            </div>

            <div class="col-lg">
                <label class="form-label">Suffix (Jr, Sr, etc):</label>
                <input type="text" class="form-control" name="suffixName" value="<?=$id['suffixName']?>">
            </div>
        </div>

        <!-- ADDRESS -->
        <div class="row mt-3">
            <div class="col-lg">
                <label class="form-label">Address:</label>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="House No." name="houseNo" value="<?=$id['houseNo']?>">
            </div>

            <div class="col-lg">
                <input type="text" class="form-control" placeholder="Street" name="street" value="<?=$id['street']?>">
            </div>

            <div class="col-lg">
                <input type="text" class="form-control" placeholder="Barangay" name="barangay" value="<?=$id['barangay']?>">
            </div>

            <div class="col-lg">
                <input type="text" class="form-control" placeholder="City/Town" name="town" value="<?=$id['town']?>">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Province" name="province" value="<?=$id['province']?>">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Zip Code" name="zipcode" value="<?=$id['zipcode']?>">
            </div>
        </div>

        <!-- OTHER INFORMATION -->
        <div class="row mt-3">
            <div class="col-md-3">
                <label class="form-label">Gender:</label>
                <select class="form-select" name="gender" value="<?=$id['gender']?>">
                    <option value= ""> --Select-- </option>
					<option value= "Male"> Male </option>
					<option value= "Female"> Female </option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Date of Birth:</label>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" min="01-01" max="12-31" name="birthDate" value="<?=$id['birthDate']?>">
                </div>
            </div>

            <div class="col-lg">
                <label class="form-label">Place of Birth:</label>
                <input type="text" class="form-control" name="birthPlace" value="<?=$id['birthPlace']?>">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label class="form-label">Civil Status:</label>
                <select class="form-select" name="civilStatus" value="<?=$id['civilStatus']?>">
                    <option value="">--Select--</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Married">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Single">Single</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Contact Number:</label>
                <input type="text" class="form-control" id="contactNumber" name="contactNumber" value="<?=$id['contactNumber']?>">
            </div>

            <div class="col-lg">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" id="emailAdd" name="emailAdd" value="<?=$id['emailAdd']?>">
            </div>
        </div>

        <div class="row mt-5">
            <center>
                <input type="submit" class="btn btn-primary col-md-3"  name="Update_Submit">
            </center>
        </div>
        
        <div class="row mt-1">
            <center>
                <a href="Register Page.php" class="btn btn-danger col-md-3"  name="Back">BACK</a>
            </center>
        </div>
    </form>
    <?php
            }
        }
    ?>   
</body>
</html>