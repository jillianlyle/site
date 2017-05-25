<?php
include ('config/init.php');
$post = returnPostInformation($_REQUEST['postID']);
siteHeader('blog * '.$post['title'].'','blog + inspiration');

echo "
<div class='postSubHeader'>
<h2>$post[header]:</h2>
</div>
<div class='postBody'>
$post[body]
</div>
<div class='backNextOnViewPostPage'>
<table>
<tr>
<th><a href='Myblog.php'>back to blog + inspiration home</a></th>
<th><a href='viewpost.php?postID=$post[nextPost]'>next post</a></th>
</tr>
</div>
";
