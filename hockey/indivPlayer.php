<?php
include('config/init.php');
$info = displayPlayerInfo($_REQUEST['name']);
$info1516=displayPlayerInfo1516($_REQUEST['name']);
echo "
<head>
    <link rel='stylesheet' href='/hockey/hockey.css'>
</head>
<body>
<h1 class='nameHeader'><div class='playerName'>$info[FirstName] $info[LastName]</div>
<div class='home'><a href='/hockey/hockey2.php'>Home</a></div></h1>";

$one = playerTableContents($info);
$two = playerTableContents($info1516);

echo "<div class='parent'>
    <div class='one'> <b>2016-2017<b><br>$one </div>
    <div class='two'> <b>2015-2016<b><br>$two </div>
    </div>";
