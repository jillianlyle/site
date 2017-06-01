<?php
include('config/init.php');
siteHeader('all comments','all blog comments');
for ($i=1; $i<=3; $i++){
    $display=getPostInformation($i);
    echo '<a href="viewpost.php?postID='.$display['blogPostID'].'">'.$display['title'].'</a><br/><br/>';
}
