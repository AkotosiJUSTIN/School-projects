<?php
include "Connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM datasheet WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query)
{
    echo "<h5 class='text-success>Record Successfully Deleted</h5>";
    header("location: /CRUD/Register%20Page.php");
}
else
{
    echo "<h5 class='text-danger'>Failed to Delete Record</h5>";
}
?>