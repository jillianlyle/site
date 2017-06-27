<?php
function getPostInformation ($blogPostID) {
    $posts = dbQuery("
        SELECT *
        FROM blog_post
        WHERE blogPostID = :Var1
        ",
        array("Var1"=>$blogPostID));
    return $posts->fetch();
}
function getALLPostInformation () {
    $posts = dbQuery("
        SELECT *
        FROM blog_post");
    return $posts->fetchAll();
}
function post () {
    $test = dbQuery("
        SELECT *
        FROM blog_post");
    return $test->fetchAll();
}
function editPost($title, $body, $subtitle, $header, $blogPostID) {
    $edit = dbQuery("
        UPDATE blog_post
        SET title=:title, body=:body, subtitle=:subtitle, header=:header
        WHERE blogPostID= :blogPostID
        ",
        array(
            "title"=>$title,
            "body"=>$body,
            "subtitle"=>$subtitle,
            "header"=>$header,
            "blogPostID"=>$blogPostID));
    return $edit;
}

function addPost($title,$body,$header,$subtitle){
    $add = dbQuery("
        INSERT INTO blog_post (title, body, header, subtitle)
        VALUES (:var1, :var2, :var3, :var4)
        ",
        array(
            "var1"=>$title,
            "var2"=>$body,
            "var3"=>$header,
            "var4"=>$subtitle
        ));
    return $add;
}
