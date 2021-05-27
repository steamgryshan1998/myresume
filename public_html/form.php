<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div class = "container">
    <form name="question_form" method="get" id="formElem">
        <div class = "row">
            <div class = "block_label">
                <label for="name">Name</label>
            </div>
            <div class = "block_input">
                <input type="text" id="name" name="name"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="email">Email</label>
            </div>
            <div class = "block_input">
                <input type="email" id="email" name="email"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="password">Password</label>
            </div>
            <div class = "block_input">
                <input type="password" id="password" name="password"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label id="gender_name">Gender</label>
            </div>
            <div class = "block_input">
                <input type="radio" id="gender_name" value="man" checked name="gender"/>male
                <input type="radio" id="gender_name" value="man" checked name="gender"/>female
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="birth">Birth Date</label>
            </div>
            <div class = "block_input">
                <input type="date" id="birth" name="birth"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="contacts">Contacts</label>
            </div>
            <div class = "block_input">
                <select id="socials" name="socials">
                    <option value="insta">Instagram</option>
                    <option value="twitter">Twitter</option>
                    <option value="linkedin">LinkedIn</option>
                    <option value="telegram">Telegram</option>
                    <option value="other">Other</option>
                </select>
                <input type="text" id="contacts" name="contacts"/>
                <button class="button_without_border" type="reset">Delete</button><br>
                <button class="blue_button" type="submit">Save</button>
                <button type="submit">Add new</button>
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
                <input type="checkbox" name="agreement"/>Agreement
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <input class="blue_button" name="print" type="button" value="Отправить" />
                <button type="submit">Save</button>
            </div>
        </div>
    </form>
</div>
<!--<div id="printBlock">
    <h5>Info</h5>

<script>
    function printForm(e){
        var Name_val = document.question_form.name;
        var val = Name_val.value;
        var printBlock = document.getElementById("printBlock");
        var pElement = document.createElement("p");
        pElement.textContent = val;
        printBlock.appendChild(pElement);
    }
    var printButton = document.question_form.print;
    printButton.addEventListener("click", printForm);
</script>
</div>
-->
</body>
</html>