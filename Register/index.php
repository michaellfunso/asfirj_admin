<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Portal | BW Tech Global</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">
<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
</head>
<body>

<!-- partial:index.partial.html -->
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
<div class="container">
  <div class="card"></div>

  <div class="card">

    <h1 class="title">Register</h1>
    <?php include "../backend_controls/validate_registration.php"?>
    <span id="Close_ALT_NEW" class="close" onclick="REED()" style="color:red; cursor:pointer; float:right; font-size:30px; padding:10px;">&times;</span>
    <form method='POST' enctype="multipart/form-data">

    <div class='input-container'>
        <input type='text' id='' name="FIRSTNAME" required='required'/>
        <label for=''>Firstname</label>
        <div class='bar'></div>
      </div>

      
      <div class='input-container'>
        <input type='text' id='' name="LASTNAME" required='required'/>
        <label for=''>Lastame</label>
        <div class='bar'></div>
      </div>


      <div class='input-container'>
        <input type='text' id='' name="username" required='required'/>
        <label for=''>Username</label>
        <div class='bar'></div>
      </div>
      <div class='input-container'>
        <input type='password' id='password-REG' required='required' name='password_1'/>
        <span  class='fa fa-fw fa-eye field-icon toggle-password' style='color:white;' onclick='Reg_Password()'></span>
        <label for=''>Password</label>
        <div class='bar'></div>
      </div>
      <div class='input-container'>
        <input type='password'  id='password-REG-repeat' required='required' name='password_2'/>
        <label for=''>Repeat Password</label>
        <div class='bar'></div>
      </div>
      <div>
      <!--<label>Profile image</label><br/>-->
      <input type="text" name="profile_image_IP" hidden readonly value='1.jpg' id="profile_image_IP" >
        
        <div class='bar'></div>
        <br/>
      </div>
      <div class='button-container'>
          <input type="hidden" name="registration" value="1">
        <button class='span'>Register</button>
      </div>
    </form>
  </div>


  <br/><br/>
  <br/><br/>
</div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./script.js"></script>

  <script>
      function PASS_1() {
  var z = document.getElementById("password-field");
  if (z.type === "password") {
    z.type = "text";
  } else {
    z.type = "password";
  }
}
  </script>
<script>
function Reg_Password() {
  var x = document.getElementById("password-REG");
  var y = document.getElementById("password-REG-repeat");
  if (x.type === "password") {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
</script>
<script>
    function SEC_PASS(){
        var m = document.getElementById("secure_pass");
  if (m.type === "password") {
    m.type = "text";

  } else {
    m.type = "password";

  }
}
</script>

<script>
//    var close = document.getElementById("Close_ALT_NEW");
//     close.addEventListener.('click', function(){
//      window.location.href="../Login/";
//     });

    function REED(){
        window.location.href = "../Login";
    }

</script>


</body>
</html>
