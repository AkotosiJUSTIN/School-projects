<?php 
    include "Connect.php";
    if(isset($_POST['Submit']))
    {
        $lastName = $_POST['lastName'];
        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $suffixName = $_POST['suffixName'];

        $houseNo = $_POST['houseNo'];
        $street = $_POST['street'];
        $barangay = $_POST['barangay'];
        $town =$_POST['town'];
        $province = $_POST['province'];
        $zipcode =$_POST['zipcode'];

        $gender = $_POST['gender'];
        $birthDate = $_POST['birthDate'];
        $birthPlace = $_POST['birthPlace'];
        $civilStatus = $_POST['civilStatus'];
        $contactNumber = $_POST['contactNumber'];
        $emailAdd = $_POST['emailAdd'];

        $sql = "INSERT INTO datasheet (lastName, firstName, middleName, suffixName,
        houseNo, street, barangay, town, province, zipcode, gender, birthDate,
        birthPlace, civilStatus, contactNumber, emailAdd) VALUES ('$lastName', '$firstName',
        '$middleName', '$suffixName', '$houseNo', '$street', '$barangay', '$town',
        '$province', '$zipcode', '$gender', '$birthDate', '$birthPlace', '$civilStatus',
        '$contactNumber', '$emailAdd')";

        $query = mysqli_query($con, $sql);

        if($query)
        {
            echo "<h5 class='text-success>Record Successfully Added</h5>";
        }
        else
        {
            echo "<h5 class='text-danger'>Failed to Add Record</h5>";
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
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mystyle.css">    
</head>
<body class="container p-5">

    <form action="Registration Form.php" method="POST" class="border bg-light p-5">

        <div class="bg-dark text-light text-center p-3">
            PERSONAL DATA SHEET
        </div>

        <div class="bg-secondary text-light p-2">
            <b>I. PERSONAL INFROMATION </b>
        </div>

        <!-- NAME -->
        <div class="row mt-3">
            <div class="col-lg">
                <label class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName">
            </div>

            <div class="col-lg">
                <label class="form-label">First Name:</label>
                <input type="text" class="form-control" name="firstName">
            </div>

            <div class="col-lg">
                <label class="form-label">Middle Name:</label>
                <input type="text" class="form-control" name="middleName">
            </div>

            <div class="col-lg">
                <label class="form-label">Suffix (Jr, Sr, etc):</label>
                <input type="text" class="form-control" name="suffixName">
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
                <input type="text" class="form-control" placeholder="House No." name="houseNo">
            </div>

            <div class="col-lg">
                <input type="text" class="form-control" placeholder="Street" name="street">
            </div>

            <div class="col-lg">
                <input type="text" class="form-control" placeholder="Barangay" name="barangay">
            </div>

            <div class="col-lg">
                <input type="text" class="form-control" placeholder="City/Town" name="town">
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Province" name="province">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Zip Code" name="zipcode">
            </div>
        </div>

        <!-- OTHER INFORMATION -->
        <div class="row mt-3">
            <div class="col-md-3">
                <label class="form-label">Gender:</label>
                <select class="form-select" name="gender">
                    <option value= ""> --Select-- </option>
					<option value= "Male"> Male </option>
					<option value= "Female"> Female </option>
                </select>
            </div>

            <div class="col-md-3">
                <label class="form-label">Date of Birth:</label>
                <div class="form-group">
                    <input type="date" class="form-control" placeholder="mm/dd/yyyy" min="01-01" max="12-31" name="birthDate">
                </div>
            </div>

            <div class="col-lg">
                <label class="form-label">Place of Birth:</label>
                <input type="text" class="form-control" name="birthPlace">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label class="form-label">Civil Status:</label>
                <select class="form-select" name="civilStatus">
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
                <input type="text" class="form-control" id="contactNumber" name="contactNumber">
            </div>

            <div class="col-lg">
                <label class="form-label">Email:</label>
                <input type="text" class="form-control" id="emailAdd" name="emailAdd">
            </div>
        </div>

        <div class="row mt-5">
            <center>
                <input type="submit" class="btn btn-primary col-md-3"  name="Submit">
            </center>
        </div>

        <div class="row mt-1">
            <center>
                <input type="reset" class="btn btn-danger col-md-3"  name="Reset">
            </center>
        </div>
    </form>
</body>
</html>