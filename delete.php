<?php
$cn = mysqli_connect("Localhost","root","") or die("Not Connected");
$db = mysqli_select_db($cn,"customerform") or die ("not selected");

$id = $_GET['id'];

$st = "DELETE FROM `form` WHERE id=$id";
$ins = mysqli_query($cn, $st) or die("Not Inserted");
if ($ins!=''){
    header("Location:http://localhost/form/CustomerForm/view.php");
}
?>