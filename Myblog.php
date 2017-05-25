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
                $display=blogData();
                for ($i=0; $i<count($display);$i++) {
                    $postID=$display[$i]['postID'];
                    $postTitle=$display[$i]['title'];
                    echo '<a href="viewpost.php?postID='.$postID.'">'.$postTitle.'</a><br/><br/>';
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
