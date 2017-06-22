<?php
function getCommentInformation ($blogPostID) {
    $posts = dbQuery("
        SELECT *
        FROM blog_comments
        WHERE blogPostID = :Var2
        ORDER BY commentID DESC
        ",
        array("Var2"=>$blogPostID));
    return $posts->fetch();
}
function getAllCommentInformation ($blogPostID) {
    $posts = dbQuery("
        SELECT *
        FROM blog_comments
        WHERE blogPostID = :Var2
        ORDER BY commentID DESC
        ",
        array("Var2"=>$blogPostID));
    return $posts->fetchAll();
}
function createComment($body, $name, $email, $blogPostID){
    $create= dbQuery("
        INSERT INTO blog_comments (commentBody, commentName, commentEmail, blogPostID)
        VALUES (:body,:name,:email,:blogPostID)",
        array(
            "body"=>$body,
            "name"=>$name,
            "email"=>$email,
            "blogPostID"=>$blogPostID
            ));
        return $create;
}
function sendMessage($name,$email,$message){
    $send=dbQuery("
        INSERT INTO contact_messages (contactName, contactEmail, contactMessage)
        VALUES(:name,:email,:message)",
        array(
            "name"=>$name,
            "email"=>$email,
            "message"=>$message
        ));
    return $send;
}
function getMessage ($name) {
    $get = dbQuery ("
        SELECT *
        FROM contact_messages
        WHERE contactName = :name",
        array(
            "name"=> $name)
        );
    return $get->fetch();
}
