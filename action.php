<?php
     error_reporting(0);
     $cn = mysqli_connect("Localhost", "root", "") or die ("Not connected");
     $db = mysqli_select_db($cn, "customerform") or die ("Not connected");

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
     $check = implode(",", $Language);


     $target_direc = "uploads/";
     $target_file = $target_direc . basename($_FILES["fileToUpload"]["name"]);
     if(empty($_FILES["fileToUpload"]["name"])) {
          $target_file ="";
     }
     $uploadOk = 1;
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file));

     $st = "INSERT INTO `form`(`Id`, `FirstName`, `SecondName`, `LastName`, `Country`, `State`, `City`, `Mob`, `Email`, `Dob`, `Gender`, `Language`, `Files`, `Address`) VALUES ( NULL, '$Fname', '$Sname', '$Lname', '$Country', '$State', '$City', '$Number', '$Email', '$DOB', '$Gender', '$check', '$target_file', '$Address');";
     mysqli_query($cn, $st) or die("Not Inserted");
     header("Location:http://localhost/form/CustomerForm/submission.html")
?>