
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
   <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
   <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portal | ASFIRJ</title>
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
    <h1 class="title">Login</h1>
    <?php include "../backend_controls/validate_securepass.php"?>
    <?php include "../backend_controls/validate_login.php"?>
    <form method="POST" enctype="multipart/form-data">
      <div class="input-container">
        <input type="#{type}" id="" required="required" name="Username"/>
        <label for="">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password"  id="password-field" required="required" class="form-control" name="Login_password"/>
        <span  class="fa fa-fw fa-eye field-icon toggle-password" style="color:red;" onclick="PASS_1();"></span>
                <label for="">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button class="span" type="submit">Login</button>
      </div>
      <!-- <div class="footer"><a href="#">Forgot your password?</a></div> -->
    </form>
  </div>
  <div class="card alt" id="CARD_ALT">
      
    <div class="toggle"></div>
    
    <h1 class="title">Register
      <div class="close"></div>
    </h1>

   
    <form method="post" type="multipart/form_data">
     
    <div class="input-container">
        <input type="password" id="secure_pass" name ="secure_pass" required="required"/>
        <label for="">Secure Pass</label>
        <span  class="fa fa-fw fa-eye field-icon toggle-password" style="color:white;" onclick="SEC_PASS()"></span>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button class="span" id="REMOVER">Next</button>
      </div>
    </form>
  </div>

  <br/><br/>
  <br/><br/>
</div>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./script.js?v=<?= time(); ?>"></script>

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
    $("#REMOVER").click(function(){
        $("#CARD_ALT").removeClass("alt");
        $("#CARD_ALT").addClass("ALT_NEW");
        $("#Close_ALT_NEW").removeClass("close_ALT_NEW");
    });
</script>

<script>
   
    $("#Close_ALT_NEW").click(function(){
        $("#CARD_ALT").removeClass("ALT_NEW");
        $("#CARD_ALT").addClass("alt");
        $("#Close_ALT_NEW").addClass("close_ALT_NEW");
    });
</script>

</body>
</html>
