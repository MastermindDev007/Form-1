<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="view.css">
</head>
<body>
     <?php
          $cn = mysqli_connect("Localhost", "root", "") or die ("Not connected");
          $db = mysqli_select_db($cn, "customerform") or die ("Not connected");
          $st = "SELECT * FROM form";
          $res = mysqli_query($cn, $st) or die("Not Inserted");
     ?>
     
          <table border='1'>
               <th>Id</th>
               <th>First Name</th>
               <th>Second Name</th>
               <th>Last Name</th>
               <th>Country</th>
               <th>State</th>
               <th>City</th>
               <th>Mob</th>
               <th>Email</th>
               <th>DOB</th>
               <th>Gender</th>
               <th>Language</th>
               <th>Files</th>
               <th>Address</th>
               
               <?php
                    while ($fld=mysqli_fetch_array($res))
                    {
                         echo "<tr>";
                              echo "<td>$fld[0]</td>";
                              echo "<td>$fld[1]</td>";
                              echo "<td>$fld[2]</td>";
                              echo "<td>$fld[3]</td>";
                              echo "<td>$fld[4]</td>";
                              echo "<td>$fld[5]</td>";
                              echo "<td>$fld[6]</td>";
                              echo "<td>$fld[7]</td>";
                              echo "<td>$fld[8]</td>";
                              echo "<td>$fld[9]</td>";
                              echo "<td>$fld[10]</td>";
                              echo "<td>$fld[11]</td>";
                              echo "<td>$fld[12]</td>";
                              echo "<td>$fld[13]</td>";
                              echo "<td><a href='view_2.php?id=$fld[0]'>View</a>/<a href='delete.php?id=$fld[0]'>Delete</a>/<a href='edit.php?id=$fld[0]'>Edit</a></td>";
                         echo "</tr>";
                    }
               ?>
          </table> 
     
</body>
</html>