<?php
include_once('config/init.php');

function getPost($inputParam) {
$result = dbQuery("
    SELECT *
    FROM blog_post
    WHERE blogPostID = :Var1
    ",array("Var1"=>$inputParam));
    return $result->fetchAll();
}

//local.codingfellowship.com/?genre=COMEDY and display a list of all those blog posts 

var_dump(getPost(1));
 ?>
