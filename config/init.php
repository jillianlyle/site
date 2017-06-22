<?php
include('config/config.php');
include('include/db_query.php'); //this should happen right after config so other functions have access to the database
include ('include/header.php');
include('include/crud/messages.php');
include('include/crud/posts.php');
include('include/postContent.php');
include('hockey/tableContentsFunctions.php');
include('hockey/sortFunctions.php');
include('hockey/indivPlayerFunctions.php');
include('hockey/filterFunctions.php');
date_default_timezone_set('America/Chicago');
