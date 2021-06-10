<?php
if(!isset($_SESSION["name"]))
{
    header('location:/index.php');
}
include "functionality/editable_settings.php";
?>
<div class = "container">


    <form action="../functionality/editable_settings.php" name="question_form" method="post" id="formElem">
        <div class = "row">
            <div class = "block_label">
                <label for="phone_number">Phone number</label>
            </div>
            <div class = "block_input">
                <input type="tel" id="phone_number" name="phone_number" value="<?php echo $content['phone number']; ?>"/>
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
        <form action="../functionality/editable_settings.php" method="post">
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <button type="submit" class="blue_button">Отправить</button><!-- для отправки в бд нужна кнопка через button а не через input-->
            </div>
        </div>
        </form>
        <?php
            }
        ?>
    </form>
    <form action="../functionality/dump_db.php" method="post">
        <div class = "row">
            <div class="block_label">
                <label></label>
            </div>
            <div class = "block_input">
                <button type="submit" class="blue_button">Бэкап</button><!-- для отправки в бд нужна кнопка через button а не через input-->
            </div>
        </div>
    </form>
    <form action="../functionality/download_dump.php" method="post">
        <button type="submit" class="blue_button">Загрузить Дамп</button><!-- для отправки в бд нужна кнопка через button а не через input-->
    </form>

</div>

