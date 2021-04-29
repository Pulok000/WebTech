<?php 

session_start();

$name= $_SESSION["username"];


        include("dbconnection.php");


        $sql="select * from registration where name='$name';";


  $result= mysqli_query($conn, $sql);

while ($row=mysqli_fetch_array($result)) {



     $conn->close();


  ?>

    <tr>
        <td><b> NAME      : </b><?php echo $row['Name']; ?></td>
        <br>
        <td> <b> EMAIL    : </b><?php echo $row['Email']; ?></td>
        <br>
        <td><b> PASSWORD   : </b><?php echo $row['Password']; ?></td>
        <br>
        <td> <b> GENDER    : </b><?php echo $row['Gender']; ?></td>
        <br>
        <td><b> DATE OF BIRTH : </b><?php echo $row['DOB']; ?></td>
        <br>
        <td> <b> BLOODGROUP   : </b><?php echo $row['Bloodgroup']; ?></td>
        <br>
        <td><b> DEGREE     : </b><?php echo $row['Degree']; ?></td>
        <br>
        
    </tr>

   <?php } 

        
         






   ?>

   <!DOCTYPE html>
   <html>
   <head>
     <title>viewprofile</title>
   </head>
   <body>


         <table>
        <div class="propic" >

         

          <tr>

            <td>


          <b>PICTURE</b>  
        </td>
         <td>
          <img src="picture/tamim.jpg"  height="140px" width="120px">
          
          </td>

          </tr>

        </div>

        </table>


   
   </body>
   </html>