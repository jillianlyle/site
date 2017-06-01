<?php
function getPostInformation ($blogPostID) {
    $posts = dbQuery("
    SELECT *
    FROM blog_post
    WHERE blogPostID = :Var1
    ", array("Var1"=>$blogPostID));
    return $posts->fetch();
}
function getCommentInformation ($blogPostID) {
    $posts = dbQuery("
    SELECT *
    FROM blog_comments
    WHERE blogPostID = :Var1
    ", array("Var1"=>$blogPostID));
    return $posts->fetch();
}
