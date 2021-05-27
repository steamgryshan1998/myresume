<?php
    session_start();
    require_once 'connection.php';
    // подключаемся к серверу
    $l = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($l));
    $query = "SELECT * FROM resume_data WHERE type = 'editable'";
    $result= mysqli_query($l, $query) or die("Ошибка " . mysqli_error($l));
    $content = mysqli_fetch_array($result);
    if(count($content) == 0){
        $query = "SELECT * FROM resume_data WHERE type = 'default'";
        $result= mysqli_query($l, $query) or die("Ошибка " . mysqli_error($l));
        $content = mysqli_fetch_array($result);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<div class="wrapper">
    <div class="sidebar">
        <div class="sidebar_photo">
            <img src="1620594800352.jpeg" alt="" class="personPhoto">
        </div>
        <div class="sidebar_information">
            <div class="sidebar_content_columns">
                <p class="nameOfColumn">CONTACT</p>
                <div class="sidebar_content">
                    <p><?php echo $content['phone number']."<br>".$content['email']."<br>".$content['location']."<br>"; ?>
                    <?php echo "<a href=".$content['personal website'].">".$content['personal website']."</a>"; ?>
                    </p>
                </div>
            </div>
            <div class="sidebar_content_columns">
                <p class="nameOfColumn">EDUCATION</p>
                    <div class="sidebar_content">
                        <p>
                            <?php echo $content['education']; ?>
                        </p>
                    </div>
            </div>
            <div class="sidebar_content_columns">
                <p class="nameOfColumn">SKILLS</p>
                <div class="sidebar_content">
 <!--                   <ul>
                        <li>Communication skills</li>
                        <li>Problem solving</li>
                        <li>Teamwork</li>
                        <li>Research</li>
                        <li>Creativity</li>
                        <li>Accept criticism</li>
                        <li>Be open to change</li>
                    </ul>-->
                    <?php echo $content['skills']; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mainInformation">
        <div class="mainInformation__name">
            <h1 class="header_id">YEVHEN HRYSHKO</h1>
            <p class="header_id_2">PHP-TRAINEE</p>
        </div>
        <p class="mainInformation__profile">
        <h2 class="headers_main_content">PROFILE</h2>
        <div>
            <p class="main_content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, ratione aperiam! Magnam suscipit ea
                eos cum, vel hic exercitationem architecto fuga sint quibusdam labore dignissimos sequi assumenda sit
                quos laudantium tempore facere necessitatibus aspernatur quisquam explicabo vitae nulla perspiciatis
                odit. Corrupti beatae, placeat illo eos itaque autem. Quam omnis voluptatum esse, aut earum rerum animi
                placeat perspiciatis reiciendis repellat possimus iste soluta magnam corporis molestiae? Necessitatibus
                ipsum, laboriosam eligendi esse ullam rem a quasi ipsa nisi officiis quis voluptate nihil quibusdam
                exercitationem. Dolore reprehenderit enim ea. Corrupti, ad! Fuga aliquam architecto debitis eveniet
                eligendi optio molestiae quis assumenda rerum incidunt!</p>
        </div>
        <p class="mainInformation__profExp">
        <h2 class="headers_main_content">PROFESSIONAL EXPERIENCE</h2>
            <p class="main_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias, molestiae eaque, modi corporis
                amet sit expedita corrupti quasi obcaecati explicabo error minus dolore quod vel quam quibusdam animi
                impedit odio, at blanditiis! Est doloremque culpa non reprehenderit, atque neque, sequi incidunt omnis
                nemo itaque, obcaecati totam tenetur. Optio exercitationem veritatis possimus cupiditate, delectus quo
                dolorum ex perspiciatis cumque. Nisi deserunt nulla esse eos aspernatur sed commodi labore. Tempora
                voluptatem deleniti accusantium distinctio rerum recusandae cupiditate, expedita doloribus eius
                inventore, aut laborum itaque, excepturi praesentium. Praesentium iste in quos quas eos doloribus, aut
                commodi nobis quod voluptatibus aliquam earum ut.</p>
            <p class="main_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias, molestiae eaque, modi corporis
                amet sit expedita corrupti quasi obcaecati explicabo error minus dolore quod vel quam quibusdam animi
                impedit odio, at blanditiis! Est doloremque culpa non reprehenderit, atque neque, sequi incidunt omnis
                nemo itaque, obcaecati totam tenetur. Optio exercitationem veritatis possimus cupiditate, delectus quo
                dolorum ex perspiciatis cumque. Nisi deserunt nulla esse eos aspernatur sed commodi labore. Tempora
                voluptatem deleniti accusantium distinctio rerum recusandae cupiditate, expedita doloribus eius
                inventore, aut laborum itaque, excepturi praesentium. Praesentium iste in quos quas eos doloribus, aut
                commodi nobis quod voluptatibus aliquam earum ut.</p>
            <p class="main_content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate alias, molestiae eaque, modi corporis
                amet sit expedita corrupti quasi obcaecati explicabo error minus dolore quod vel quam quibusdam animi
                impedit odio, at blanditiis! Est doloremque culpa non reprehenderit, atque neque, sequi incidunt omnis
                nemo itaque, obcaecati totam tenetur. Optio exercitationem veritatis possimus cupiditate, delectus quo
                dolorum ex perspiciatis cumque. Nisi deserunt nulla esse eos aspernatur sed commodi labore. Tempora
                voluptatem deleniti accusantium distinctio rerum recusandae cupiditate, expedita doloribus eius
                inventore, aut laborum itaque, excepturi praesentium. Praesentium iste in quos quas eos doloribus, aut
                commodi nobis quod voluptatibus aliquam earum ut.</p>
    </div>
</div>
</body>
</html>