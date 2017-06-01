<?php include('config/init.php');
$post = getPostInformation($_REQUEST['ID']);
siteHeader('comments','blog + inspiration');
$body=$_POST['body'];
$name=$_POST['name'];
$email=$_POST['email'];
$number=$post['blogPostID'];
$link =mysqli_connect("192.168.33.12", "cf", "password", "cf");
if($link==false) {
    die("ERROR:could not connect." .mysqli_connect_error());
}
$sql="INSERT INTO blog_comments (commentBody, commentName, commentEmail, blogPostID)
VALUES ('$body','$name','$email','$number')";
if(mysqli_query($link, $sql)){
    echo "
    <div class='postSubHeader'>
    <h2>".$post["header"].":</h2>
    </div>
    <div class='postBody'>
    ".$post["body"]."
    <br><br>
    </div>
    <div class='postComment'>
    name: $name <br/> comment: $body
    </div>
    <div class='backNextOnViewPostPage'>
    <table>
    <tr>
    <th><a href='Myblog.php'>back to blog + inspiration home</a></th>
    <th><a href='viewpost.php?postID=".$post["nextPost"]."'>next post</a></th>
    </tr>
    </div>";
}
else {
echo "ERROR:could not execute $sql.".mysqli_error($link);
}
mysqli_close($link);

 ?>
