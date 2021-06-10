<?php
if(isset($_SESSION["name"]))
{
    header('location:/index.php');
}
?>
<div class="form">
    <div class="form_body">
    <form action="#" id="form_reg" method="post">
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
        <button type="button" id="button_reg" class="form_button">Register Now</button>
    </form>
    <div id="error">

    </div>
</div>

    <div class="after_container">
    <p class="Registered">Already have an account? <a href="login.php">Sign in</a> </p>
</div>
</div>

<script src="../js/registration_jquery.js"></script>

