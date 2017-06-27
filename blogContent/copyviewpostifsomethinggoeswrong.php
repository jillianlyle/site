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

if(isset($_REQUEST['message'])) {
    $hello = getCommentInformation($_REQUEST['postID']);
    echo "<h3>Your comment submitted successfully:</h3>
    <div class='postComment'>
        <div class='nameComment'>
        <table>
        <tr>
        <th>name:</th>
        <th>comment:</th></tr>
        <tr>
        <td>".$hello['commentName']."</td>
        <td>".$hello['commentBody']."</td></tr>
        </table>
        </div>
    </div>";
}

$posts = getALLPostInformation();
if ($post['blogPostID'] == count($posts)) {
    nextPost('/blogContent/comingSoon.php');
}
else {
    nextPost('/blogContent/viewpost.php?postID='.$post['nextPost'].'');
}
