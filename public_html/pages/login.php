<?php
if(isset($_SESSION["name"]))
{
    header('location:/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>login form</title>
  <link rel="stylesheet" href="../css/registration.css">
  <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<div class="form">
  <form action="../functionality/input_login.php" class="form_body" id="login" method = get>
    <div class="title">
      <div class="line"><hr size="5"></div>
      <h1 class="formName">Login</h1>
      <div class="line"><hr size="5"></div>

    </div>
    <div class="form_item">
      <label for="username" class="formLabel"></label>
      <input id="username"  type="text" name="username" class="form_input req" placeholder="Username">
    </div>
    <div class="form_item">
      <label for="formPassword" class="formLabel"></label>
      <input id="formPassword"  type="password" name="password" class="form_input req" placeholder="Password">
    </div>
<!--    <div class="form_item">
      <div class="checkbox">
        <input id="formAgreement" required  type="checkbox" name="agreement" class="checkbox_input req">
        <label for="formAgreement" class="checkbox_label">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a> </label>
      </div>
    </div> -->
    <button type="submit" class="form_button">Login</button>
      <button type="submit" class="form_button"><a href="?tab=registration">Register Now</a></button>
  </form>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/validator.js"></script>
<script src="../js/login_jquery.js"></script>

</body>
</html>
<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="wrapper">
  <div class="container">
    <div class="inner_container">
      <h1 class="pretty-header left-right-line-header">Register</h1>
      <p>Create your account. It's free and only takes a minute</p>
    </div>
  </div>
  <div class="after_container">
    <p>Already have an account? Sign in.</p>
  </div>
</div>
</body>
</html>-->