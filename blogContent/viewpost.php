<?php
include ('config/init.php');
if(isset($_REQUEST['submit'])){
    createComment($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['body'], $_REQUEST['postID']);

    $redirect=getCommentInformation($_REQUEST['postID']);
    header("location:/blogContent/viewpost.php?postID=$_REQUEST[postID]&message=".$redirect['commentID']."");
    exit;
}


$post =getPostInformation($_REQUEST['postID']);
siteHeader('blog * '.$post["title"].'','blog + inspiration');
blogPost($post['header'],$post['body']);

$hello = getAllCommentInformation($_REQUEST['postID']);
foreach($hello as $value){
    echo "$value[commentBody]<br>";
};

$posts = getALLPostInformation();
if ($post['blogPostID'] == count($posts)) {
    nextPost('/blogContent/comingSoon.php');
}
else {
    nextPost('/blogContent/viewpost.php?postID='.$post['nextPost'].'');
}
