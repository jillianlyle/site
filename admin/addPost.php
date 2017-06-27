<?php
include ('config/init.php');
if(isset($_REQUEST['submit'])){
    $add=addPost($_REQUEST['title'], $_REQUEST['body'], $_REQUEST['header'], $_REQUEST['subtitle']);

    header("location:/admin/addPost.php?postSaved");

}

if(isset($_REQUEST['cancel'])){
    header("location:/admin/adminPage.php");
}

$addPost = "<form action='' method = 'post'> ".addEditPostForm('','','','')." </form>";
if(isset($_REQUEST['saved'])){
    $addPost = "your post has been added!";
}

adminHomeHeader('Add Post');
echo"
<h1>ADD POST</h1>
<div class='addForm'>
$addPost
</div>
";
