<?php
function siteHeader($title, $header){
    echo "<html>
        <head>
            <title>$title</title>
            <link rel='stylesheet' href='contentPages.css?Time='" .microtime()."' />
            <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
        </head>
        <body>
            <div class='headerBlueBackground'>
                <ul>
                    <li><a class='active' href='index.php'>home</a></li>
                    <li><a href='contact.php'>say hello</a></li>
                    <li><a href='resume.php'>resume</a></li>
                    <li><a href='Myblog.php'>blog + inspiration</a></li>
                    <li><a href='Moreinfo.php'>about</a></li>
                </ul>
                <h1>$header</h1>
            </div>";
}
