<!DOCTYPE html>
<html>
<head>
    

</head>
<body>

 <form method="POST"  name = "myform"  onsubmit="validateform()" >
      <label>Email</label>
      <input type="text" name="email" placeholder="Enter your Email" id="email" onkeyup="checkEmail(this.value)">
      <span id="emailErr" style="color:orangered"></span>
      <small>Error message</small>

 </form>

</body>
</html>

<script type="text/javascript">
  function checkEmail(email) {
  if (email.length == 0) {

    document.getElementById("emailErr").innerHTML = "";

    return;

  } else {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {

      if (this.readyState == 4 && this.status == 200) {

        document.getElementById("emailErr").innerHTML = this.responseText;

      }

    };

    xmlhttp.open("GET", "checkEmail.php?email=" + email, true);

    xmlhttp.send();

  }

}
</script>