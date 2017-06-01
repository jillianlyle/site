<?php
include ('config/init.php');
$post =getPostInformation($_REQUEST['postID']);
siteHeader('blog * '.$post["title"].'','blog + inspiration');

if ($post['blogPostID'] == 99) {
    print "
    <div class='postSubHeader'>
    <h2>".$post["header"].":</h2>
    </div>
    <div class='postBody'>
    ".$post["body"]."
    </div>
    <div class='backNextOnViewPostPage'>
    <table>
    <tr>
    <th><a href='Myblog.php'>back to blog + inspiration home</a></th>
    <th></th>
    </tr>
    </div>";
}
else {
    print "
    <div class='postSubHeader'>
    <h2>".$post["header"].":</h2>
    </div>
    <div class='postBody'>
    ".$post["body"]."
    <br><br>
    <div class='blogCommentForm'>
    <h3>Leave a comment:</h3>
    <form action='comment.php?ID=$_REQUEST[postID]' method='post'>
    Name: <input type='text' name='name'><br>
    Email: <input type='test' name='email'> <br>
    Comment: <br> <textarea name='body' placeholder='Add a comment...' rows='10' cols='50'></textarea><br>
    <input type='submit' value='Submit'>
    </form>
    </div>
    </div>
    <div class='backNextOnViewPostPage'>
    <table>
    <tr>
    <th><a href='Myblog.php'>back to blog + inspiration home</a></th>
    <th><a href='viewpost.php?postID=".$post["nextPost"]."'>next post</a></th>
    </tr>
    </div>";
}
