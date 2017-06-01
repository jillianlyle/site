<?php include ('config/init.php');
siteHeader('blog', 'blog + inspiration'); ?>
<html>
<body>
<div class="blogInspirationTable">
    <table>
    <tr>
        <th>blog</th>
        <th>inspiration</th>
    </tr>
    <tr>
        <td>
            <ul>
                <?php
                for ($i=1; $i<=3; $i++){
                    $display=getPostInformation($i);
                    echo '<a href="viewpost.php?postID='.$display['blogPostID'].'">'.$display['title'].'</a><br/><br/>';
                }
                 ?>
            </ul>
        </td>
        <td>
            <img src='inspo1.jpg' alt='happy1' width=250px>
            <img src='inspo2.jpg' alt='happy2' width=250px>
            <img src='inspo3.jpg' alt='happy3' width=250px>
        </td>
    </tr>
    </table>
</div>
    </body>
</html>
