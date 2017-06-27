<?php
include ('config/init.php');
if(isset($_REQUEST['submit'])){
    $result = editPost($_REQUEST['title'],$_REQUEST['body'], $_REQUEST['subtitle'], $_REQUEST['header'], $_REQUEST['postID']);
}
if(isset($_REQUEST['cancel'])){
    header("location:/admin/adminPage.php");
}
$values = getPostInformation($_REQUEST['postID']);
adminHomeHeader('Edit Post');

echo"
<h1>EDIT POST</h1>
<div class='editForm'>
<form action='' method='post'>
".addEditPostForm($values['title'],$values['body'],$values['subtitle'],$values['header'])."
</form>
</div>";
