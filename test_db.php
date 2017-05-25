<?php
include_once('config/init.php');

function getPost($blogPostID) {
$result = dbQuery("
    SELECT *
    FROM blog_post
    WHERE blogPostID = :blogPostID
    ",array("blogPostID"=>$blogPostID));
    return $result;
}

var_dump(getPost(1));
 ?>
