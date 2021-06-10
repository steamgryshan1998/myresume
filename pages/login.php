<?php
if(isset($_SESSION["name"]))
{
    header('location:/index.php');
}
?>
<title>Login</title>
<div class="form">
  <form action="#" class="form_body" id="login" method=GET>
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
    <button type="submit" id="button_log" class="form_button">Login</button>
  </form>
    <form class="form_body">
        <button type="button" class="form_button"><a href="?tab=registration">Register Now</a></button>
    </form>
    <div id="error">

    </div>

</div>

<script src="../js/login_jquery.js"></script>

