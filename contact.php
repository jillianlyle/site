<?php include ('config/init.php');
if (isset($_REQUEST['submit'])){
    $errors=array();
    validatefield('name');
    validatefield('email');
    validatefield('message');
    if (sizeof($errors) == 0) {
        sendMessage($_REQUEST['name'], $_REQUEST['email'], $_REQUEST['message']);

        $redirect = getMessage($_REQUEST['name']);
        header('location:/contact.php?messageID='.$redirect['messageID'].'');
        exit;
    }
}

if(isset($_REQUEST['messageID'])) {
    $commentConfirm = "<br><br>the message was sent!
    <a href='contact.php'>submit another</a>";
}
else {
    $commentConfirm="
    </div>
    <div class='sendMessageForm'>
    <form action='' method='post'>
    <p>
        ". formTextBox('text','name','','Full Name *')."
        ".(@$errors['name'] ? $errors['name'] : '')."
        <p> ". formTextBox('text','email','','Email *')."
        ".(@$errors['email'] ? $errors['email'] : '')."
        <p> ".formTextBox('text','message', '','Your Message *')."
        ".(@$errors['message'] ? $errors['message'] : ' ')."
        <p>".formTextBox('submit','submit','SUBMIT MESSAGE','')."
        </p>
        </form>
        </div>
        </body>
    ";
}

siteHeader('contact me', 'say hello');
echo"
<html>
<body>
<div class='sayHelloInformation'>
    <p>
        Email: jblyle@wustl.edu
        <br>Linkedin: <a href='https://www.linkedin.com/in/jillian-lyle/'>Jillian Lyle</a>
        <br>Spotify: jillylyle
        <br>Instagram: <a href='https://www.instagram.com/jillylyle/'>@jillylyle</a>
    </p>
$commentConfirm

";
