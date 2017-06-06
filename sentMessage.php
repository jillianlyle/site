<?php
include('config/init.php');
siteHeader('contact me','say hello');
echo "<div class='sayHelloInformation'>
    <p>
        Email: jblyle@wustl.edu
        <br>Linkedin: <a href='https://www.linkedin.com/in/jillian-lyle/'>Jillian Lyle</a>
        <br>Spotify: jillylyle
        <br>Instagram: <a href='https://www.instagram.com/jillylyle/''>@jillylyle</a>
    </p>
</div>";

$result=sendMessage($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['message']);
if (isset($result)){
    echo "<div class='sentMessageThanks'> Thanks for your message!</div>";
}

 ?>
