<!DOCTYPE html>
<html>
<head>
  <title>
      View Profile
  </title>
</head>
<body>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous">
  
</script>




  </div>

       <div id="right">


   <h1> User Records</h1 >

        <div align="center">
          <input style="height: 30px; font-size: 20px;" type="text" placeholder="Search with Username..." id="myInput" onkeyup="myFunction()">
          <br>
          <br>


        </div>

       
          <table border="0"  id="myTable">
        <thead>
            <th>Username &nbsp;&nbsp;&nbsp;</th>&nbsp;&nbsp;&nbsp;
            <th>UserType &nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>Email &nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>PhoneNumber  &nbsp;&nbsp;&nbsp;</th>
            <th>Gender &nbsp;&nbsp;&nbsp;</th>
            <th>BloodGroup &nbsp;&nbsp;&nbsp;</th>
            




        </thead>


        <?php 

      



 $servername = "localhost";
         $username = "username";
        $password = "password";
         $dbname = "banglarhat";

           // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
         if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
          }








       $sql= "SELECT Username, Password, Type ,Email,PhoneNumber,Gender,BloodGroup FROM `registration` ";

       $result= mysqli_query($conn, $sql);



while ($row=mysqli_fetch_array($result)) {







    ?>

    <tr id="data">
        <td><?php echo $row['Username']; ?></td>
        <td><?php echo $row['Type']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <td><?php echo $row['PhoneNumber']; ?></td>
        <td><?php echo $row['Gender']; ?></td>
        <td><?php echo $row['BloodGroup']; ?></td>
        
    </tr>



   <?php } ?>



    
       </div>


</table>


</div>



<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>
</html>