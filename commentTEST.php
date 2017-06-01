<?php
include('config/init.php');
$hello=getCommentInformation(1);
echo "$hello[commentName]";
