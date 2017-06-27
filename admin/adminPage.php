<?php
include ('config/init.php');
adminHomeHeader('');
?>

<html>
<div class='container'>
<div class='editPostText'><h1>View Posts:</h1>
    <?php
    displayPostLinks();
    ?>
</div>
<div class='editPostText'><h1>Edit Post:</h1>
    <?php
    displayPostLinks('/admin/editPost.php');
    ?>
</div>
<div class='editPostText'><h1>Add Post:</h1>
    <a href='/admin/addPost.php'>New</a>
    <br><br><a href='/admin/editPost.php'>Draft???</a>
</div>
</div>
</html>
