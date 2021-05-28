
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume input</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div class = "container">
    <form action="download_dump.php" method="post">
        <button type="submit" class="blue_button">Загрузить Дамп</button><!-- для отправки в бд нужна кнопка через button а не через input-->
        <!--                <button type="submit">Save</button>  -->
    </form>

    <form name="question_form" method="post" id="formElem">
        <div class = "row">
            <div class = "block_label">
                <label for="phone_number">Phone number</label>
            </div>
            <div class = "block_input">
                <input type="tel" id="phone_number" name="phone_number" value="<?php include 'editable_settings.php'; echo $content['phone number']; ?>"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="email">Email</label>
            </div>
            <div class = "block_input">
                <input type="email" id="email" name="email" value="<?php echo $content['email']; ?>"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="text">Location</label>
            </div>
            <div class = "block_input">
                <input type="text" id="password" name="location" value="<?php echo $content['location']; ?>"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="text">Personal web-site</label>
            </div>
            <div class = "block_input">
                <input type="text" id="password" name="website" value="<?php echo $content['personal website']; ?>"/>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="hobby">Education</label>
            </div>
            <div class = "block_input">
                <textarea id="hobby" name="education">
                    <?php echo $content['education']; ?>
                </textarea>
            </div>
        </div>
        <div class = "row">
            <div class="block_label">
                <label for="hobby">Skills</label>
            </div>
            <div class = "block_input">
                <textarea id="hobby" name = "skills">
                    <?php echo $content['skills']; ?>
                </textarea>
            </div>
        </div>
        <?php
            if(isset($_SESSION["name"]))
            {
        ?>
        <form action="editable_settings.php" method="post">
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <button type="submit" class="blue_button">Отправить</button><!-- для отправки в бд нужна кнопка через button а не через input-->
<!--                <button type="submit">Save</button>  -->
            </div>
        </div>
        </form>
        <?php
            }
        ?>
<!--        <form action="default_settings.php" method="post">
            <div class = "row">
                <div class="block_label">
                    <label></label>
                </div>
                <div class = "block_input">
                    <button type="submit" class="blue_button">Default</button>   для отправки в бд нужна кнопка через button а не через input                    <button type="submit">Save</button>
                </div>
            </div>

                 </form> -->
    </form>
    <form action="dump_db.php" method="post">
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <button type="submit" class="blue_button">Бэкап</button><!-- для отправки в бд нужна кнопка через button а не через input-->
                <!--                <button type="submit">Save</button>  -->
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
