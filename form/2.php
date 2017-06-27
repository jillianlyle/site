<?php
include ('config/init.php');

if(isset($_REQUEST['CommentForm'])){
    $error=array();
    if (!@$_REQUEST['Name']){
        $error['Name']= "required";
    }
if(sizeof($error) == 0){
        createCommentTest($_REQUEST['Name']);
        $commentId=saveComment($_REQUEST['Name']);

        header('location:/form/2.php?NewcommentID='.$commentId['commentId'].'');
        exit;
}
}
$commentConfirm = "";
if(isset($_REQUEST['NewcommentID'])) {
    $commentConfirm = "the comment was saved";
}

echo "
$commentConfirm
<form action='' method='post'>
Your name:<input type='text' name='Name' value='".(@$_REQUEST['Name'] ? $_REQUEST['Name'] : "")."' />
    ".(@$error['Name'] ? "<span class='Error'>".$error['Name']."</span>" : "")."
<input type='submit' name='CommentForm' />
</form>";

function saveComment($name) {
    $commentId =
    dbQuery("
    SELECT *
    FROM commentTest
    WHERE commentName = :var1",
    array(
        "var1"=>$name
    ));
    return $commentId->fetch();
}

function createCommentTest($name){
    $send=dbQuery("
    INSERT INTO commentTest (commentName)
    VALUES(:name)",
    array(
        "name"=>$name
    ));
    return $send;
}
 ?>
