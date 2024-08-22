<?php
$cn = mysqli_connect("Localhost","root","") or die("Not Connected");
$db = mysqli_select_db($cn,"customerform") or die("Database Not Connected");
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="edit.css">
</head>
<body>
    <form action="editexe.php" method="post" enctype="multipart/form-data">
          <?php 
        
               $id = $_GET['id'];
               $st = "SELECT * FROM form  WHERE Id=$id";
               $res = mysqli_query($cn, $st) or die("Not Inserted");        
               while ($fld=mysqli_fetch_array($res)) {
          
          ?>

               <input type="hidden" name="id" value="<?php echo $fld["Id"];?>">

     <div class="container">
               <b>Developer Survey Form</b>
               <br>
               <br>
               <!--1st row-->
               <div class="first">
                    <input type="text" name="Fname" id="Fname" value="<?php echo $fld["FirstName"];?>" placeholder="First Name" required /> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                    <input type="text" name="Sname" id="Sname" value="<?php echo $fld["SecondName"];?>" placeholder="Second Name" /> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                    <input type="text" name="Lname" id="Lname" value="<?php echo $fld["LastName"];?>" placeholder="Last Name" required />
               </div>
     
               <br>
               <br>
     
               <!--2nd row-->
               <div class="second">
                    <!--for country-->

                         <select name="country" id="country">
                              <option  value="<?php echo $fld["Country"];?>" selected="selected">Select Country</option>
                         </select> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                    
                    <!--for state-->

                         <select name="state" id="state">
                              <option  value="<?php echo $fld["State"];?>" selected="selected">Please select Country First</option>
                         </select> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
     
                    <!--for city-->

                         <select name="city" id="city">
                              <option  value="<?php echo $fld["City"];?>" selected="selected">Please select State First</option>
                         </select>
               </div>
     
               <br>
               <br>
     
               <!--3rd row-->
               <div class="third">
                    <input type="tel" value="<?php echo $fld["Mob"];?>" maxlength="10" placeholder="Phone" name="number" /> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                    <input type="email" value="<?php echo $fld["Email"];?>" placeholder="Email" name="email" required /> &nbsp  &nbsp  &nbsp  &nbsp  &nbsp
                    <input type="date" name="DOB" id="DOB">
               </div>
     
               <br>
               <br>
     
               <!--4th row-->
               <div class="fourth">
     
                    <div class="gender">
                         <span>Gender :  &nbsp</span>
                         <br>
                         <input type="radio" name="gender" value="male" checked/>
                         <label for="male">Male</label> &nbsp
                         <input type="radio" name="gender" value="female" />
                         <label for="female">Female</label>
                    </div>
                    <label for="Skills" id="skills">Skills :</label>
                    <div class="first-col">
     
                         <input type="checkbox" name="language[]" value="html" />
                         <label for="html">HTML</label>
                         <br>
                         <input type="checkbox" name="language[]" value="css" />
                         <label for="css">CSS</label>
                         <br>
                         <input type="checkbox" name="language[]" value="javascript" />
                         <label for="javascript">JavaScript</label>
     
                    </div>
                    <div class="second-col">
     
                         <input type="checkbox" name="language[]" value="bootstrap" />
                         <label for="bootstrap">Bootstrap</label>
                         <br>
                         <input type="checkbox" name="language[]" value="tailwind" />
                         <label for="tailwind">Tailwind</label>
                         <br>
                         <input type="checkbox" name="language[]" value="sass" />
                         <label for="sass">SASS/SCSS</label>
     
                    </div>
                    <div class="third-col">
     
                         <input type="checkbox" name="language[]" value="reactjs" />
                         <label for="reactjs">React JS</label>
                         <br>
                         <input type="checkbox" name="language[]" value="angular" />
                         <label for="angular">Angular</label>
                         <br>
                         <input type="checkbox" name="language[]" value="vuejs" />
                         <label for="vuejs">Vue Js</label>
     
                    </div>
               </div>
     
               <br>
     
               <!--5th row-->
               <div class="fifth">
                    <input type="file" id="fileToUpload" name="fileToUpload">
               </div>
     
               <br>
     
               <!--6th row-->
               <div class="sixth">
                    <textarea name="address" id="" cols="108" rows="5" placeholder="Address"><?php echo $fld["Address"]; ?></textarea>
               </div>
     
               <br>
     
     
               <!--btn-->
               <div class="btn">
                    <input type="submit" value="Update" class="glow-on-hover">
               </div>
     
          </div>
          <?php }?>
     </form>
     

     <script src="Script.js"></script>
</body>
</html>