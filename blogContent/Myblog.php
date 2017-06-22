<?php include ('config/init.php');
siteHeader('blog', 'blog + inspiration');
?>
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
                $display = post();
                foreach($display as $value) {
                    echo '<a href="/blogContent/viewpost.php?postID='.$value['blogPostID'].'">'.$value['title'].'</a><br/><br/>';
                }
                 ?>
            </ul>
        </td>
        <td>
            <img src='/images/inspo1.jpg' alt='happy1' width='250px'>
            <img src='/images/inspo2.jpg' alt='happy2' width='250px'>
            <img src='/images/inspo3.jpg' alt='happy3' width='250px'>
        </td>
    </tr>
    </table>
</div>
<div class='adminButton'>
    <a href='/admin/adminPage.php'>Admin Page</a>
</div>
</body>
</html>
