<?php
function siteHeader($title, $header){
    echo "<html>
        <head>
            <title>$title</title>
            <link rel='stylesheet' href='/css/contentPages.css?Time='" .microtime()."' />
            <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
            <script src='https://code.jquery.com/jquery-3.2.1.min.js' integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=' crossorigin='anonymous'> </script>
            <script src='/javascript/test.js'></script>
        </head>
        <body>
            <div class='headerBlueBackground'>
                <ul>
                    <li><a class='active' href='/index.php'>home</a></li>
                    <li><a href='/contact.php'>say hello</a></li>
                    <li><a href='/resume.php'>resume</a></li>
                    <li><a href='/blogContent/Myblog.php'>blog + inspiration</a></li>
                    <li><a href='/Moreinfo.php'>about</a></li>
                </ul>
                <h1>$header</h1>
            </div>";
}
function adminHomeHeader($title) {
    echo "
    <html>
        <head>
            <title>admin section: $title</title>
            <link rel='stylesheet' href='/css/adminPages.css?Time='".microtime()."' />
            <link href='https://fonts.googleapis.com/css?family=Barrio' rel='stylesheet'>
            <script src='https://code.jquery.com/jquery-3.2.1.min.js' integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=' crossorigin='anonymous'> </script>
            <script src='/javascript/myScript.js'></script>
        </head>
        <body>
            <div class='adminHomeHeader'>
            <div class='adminUserText'>
            ADMIN USER
            </div>
            <div class='exitAdminText'>
            <a href='/blogContent/Myblog.php'>exit</a>
            </div>
            <div class='adminHomeText'>
            <a href='/admin/adminPage.php'>home</a>
            </div>
            </div>
    ";
}
