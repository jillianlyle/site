<?php include ('config/init.php');
siteHeader('contact me', 'say hello'); ?>
<html>
<body>
<div class="sayHelloInformation">
    <p>
        Email: jblyle@wustl.edu
        <br>Linkedin: <a href="https://www.linkedin.com/in/jillian-lyle/">Jillian Lyle</a>
        <br>Spotify: jillylyle
        <br>Instagram: <a href="https://www.instagram.com/jillylyle/">@jillylyle</a>
    </p>
</div>
<div class='sendMessageForm'>
<form action='sentMessage.php' method='post'>
    <p><input type='text' name='name' placeholder='Full Name *' required></p>
    <p><input type='text' name='email' placeholder='Email *' required></p>
    <p><input type='text' name='message' placeholder='Your Message *' required><br>
    <input type='submit' value='SUBMIT MESSAGE'></p>
</form>
</div>
</body>
</html>
