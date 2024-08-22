<?php

     $cn = mysqli_connect("Localhost", "root", "") or die ("Not connected");
     $db = mysqli_select_db($cn, "customerform") or die ("Not connected");

     $id = $_POST['id'];
     $Fname = $_POST['Fname'];
     $Sname = $_POST['Sname'];
     $Lname = $_POST['Lname'];
     $Country = $_POST['country'];
     $State = $_POST['state'];
     $City = $_POST['city'];
     $Number = $_POST['number'];
     $Email = $_POST['email'];
     $DOB = $_POST['DOB'];
     $Gender = $_POST['gender'];
     $Address = $_POST['address'];
     $Language = $_POST['language'];
     print_r($Language);
     echo $Language;
     $check = implode(",", $Language);


     $target_direc = "uploads/";
     $target_file = $target_direc . basename($_FILES["fileToUpload"]["name"]);
     if(empty($_FILES["fileToUpload"]["name"])) {
          $target_file ="";
     }
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

     $st = "UPDATE `form` SET `FirstName`='$Fname',`SecondName`='$Sname',`LastName`='$Lname',`Country`='$Country',`State`='$State',`City`='$City',`Mob`='$Number',`Email`='$Email',`DOB`='$DOB',`Gender`='$Gender',`Language`='$check',`Files`='$target_file',`Address`='$Address' WHERE Id='$id'";
     $ins = mysqli_query($cn, $st) or die("Not Inserted");
     if ($ins!=''){
          header("Location:http://localhost/form/CustomerForm/view.php");
     }
?>