<?php include('config/init.php');
$post = getPostInformation($_REQUEST['ID']);
siteHeader('comments','blog + inspiration');

$body=$_REQUEST['body'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$blogPostID=$_REQUEST['ID'];

$result = createComment($body,$name,$email,$blogPostID);

if(isset($result)){
    echo "
    <div class='postSubHeader'>
    <h2>".$post["header"].":</h2>
    </div>
    <div class='postBody'>
    ".$post["body"]."
    <br><br>
    </div>
    <h3>Your comment:</h3>
    <div class='postComment'>
        <div class='nameComment'>
        <table>
        <tr>
        <th>name:</th>
        <th>comment:</th></tr>
        <tr>
        <td>$name </td>
        <td>$body</td></tr>
        </table>
        </div>
    </div>
    <h3>All comments:</h3>";
}
$comments=getCommentInformation($_REQUEST['ID']);
foreach($comments as $index=>$comment){
    echo"
    <div class='allPostComments'>
    <div class='commentNumber'>".$index."</div>
    <div class='nameComment'>
    <table>
    <tr>
    <th>name:</th>
    <th>comment:</th>
    </tr>
    <tr>
    <td>".$comment['commentName']."</td>
    <td> ".$comment['commentBody']."</td>
    </tr>
    </table></div>
    </div>";
}
echo "
    <div class='backNextOnViewPostPage'>
    <table>
    <tr>
    <th><a href='Myblog.php'>back to blog + inspiration home</a></th>
    </tr>
    </div>";

 ?>
