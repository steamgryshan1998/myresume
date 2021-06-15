<?php
if(!isset($_SESSION["name"]))
{
    header('location:/index.php');
}
?>

<div class = "container">
    <form name="question_form" method="get" id="formElem" >
        <div class = "row">
            <div class = "block_label">
                <label for="name">Name</label>
            </div>
            <div class = "block_input">
                <input type="text" id="name" name="name" class="validation"/>
                <small></small>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="email">Email</label>
            </div>
            <div class = "block_input">
                <input type="email" id="email" name="email" class="validation"/>
                <small></small>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="password">Password</label>
            </div>
            <div class = "block_input">
                <input type="password" id="password" name="password"/>
                <small></small>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label id="gender_name">Gender</label>
            </div>
            <div class = "block_input">
                <input type="radio" id="check1" class="gender_name" value="man" name="gender"/>male
                <input type="radio" id="check2" class="gender_name" value="woman" name="gender"/>female
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="birth">Birth Date</label>
            </div>
            <div class = "block_input">
                <input type="date" id="birth" name="birth"/>
                <small></small>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="contacts">Contacts</label>
            </div>
            <div class = "block_input" id="contact">
 <!--              <button class="button_without_border" id="Reset" type="button">Delete</button>  -->
                <button id="save" class="blue_button" type="submit">Save</button>
                <input type="button" value="Add new" id="contact_button" onclick="addItems();"><br>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="photo">Photo</label>
            </div>
            <div class = "block_input border_type">
                <input type="file" id="photo" name="photo"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="hobby">Hobbies</label>
            </div>
            <div class = "block_input">
                <textarea id="hobby">
                </textarea>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="words">Some words</label>
            </div>
            <div class = "block_input">
                <textarea id="words" name="words"></textarea>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <input type="checkbox" name="agreement" id="agreement" class="agreement"/>Agreement
                <small></small>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <button type="submit" class="blue_button" id="blue_button" name="print">Отправить</button>
                <button id="reset" type="reset">Reset</button>
            </div>
        </div>
    </form>
</div>
<div id="print_block">
</div>
<script src="../js/validation.js"></script>
<script src="../js/add.js"></script>
