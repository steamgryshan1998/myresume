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
    <title>Registration form</title>
    <link rel="stylesheet" href="../css/registration.css">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<body>
<div class="form">
    <div class="form_body">
    <form action="../functionality/input.php" method="post">
        <div class="title">
            <div class="line"><hr size="4"></div>
            <h1 class="formName">Register</h1>
            <div class="line"><hr size="4"></div>

        </div>
        <p>Create your account.It's free and only takes a minute</p>
        <div class="name">
            <div class="form_item">
                <label for="formName" class="formLabel"></label>
                <input id="formName"  type="text" name="firstName" class="form_input-name req" placeholder="First Name">
            </div>
            <div class="form_item">
                <label for="formSurname" class="formLabel"></label>
                <input id="formSurname"  type="text" name="lastName" class="form_input-name req" placeholder="Last Name">
            </div>
        </div>
        <div class="form_item">
            <label for="formEmail" class="formLabel"></label>
            <input id="formEmail"  type="email" name="email" class="form_input req" placeholder="Email">
        </div>
        <div class="form_item">
            <label for="formPassword" class="formLabel"></label>
            <input id="formPassword"  type="password" name="password" class="form_input req" placeholder="Password">
        </div>
        <div class="form_item">
            <label for="formConfPassword" class="formLabel"></label>
            <input id="formConfPassword"  type="password" name="conf_password" class="form_input req" placeholder="Confirm Password">
        </div>
        <div class="form_item">
            <div class="checkbox">
                <input id="formAgreement" required  type="checkbox" name="agreement" class="checkbox_input req">
                <label for="formAgreement" class="checkbox_label">I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a> </label>
            </div>
        </div>
        <button type="submit" class="form_button">Register Now</button>
    </form>
</div>

    <div class="after_container">
    <p class="Registered">Already have an account? <a href="login.php">Sign in</a> </p>
</div>
</div>

</body>
</html>