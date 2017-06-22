<?php
function formTextBox($type,$name,$value, $placeholder){
    $text=
        "<input type='$type' name='$name' value='$value' placeholder='$placeholder'>";
    return $text;
}
function formTextArea($name,$rows,$cols,$value){
    $textarea =
        "<textarea name='$name' rows='$rows' cols='$cols'>$value</textarea>";
    return $textarea;
}
function addEditPostForm($titleValue,$bodyValue,$subtitleValue,$headerValue){
    $form =
        "<div class='label'>TITLE: <input type='text' name='title' value='$titleValue'> </div>
        <div class='label'>BODY:<textarea name='body' rows='4' cols='50'>$bodyValue</textarea>
        </div>
        <div class='label'>SUBTITLE: <textarea name='subtitle' rows='4' cols='50'>$subtitleValue</textarea>
        </div>
        <div class='label'>HEADER: <input type='text' name='header' value='$headerValue'>
        </div>
        <input type='submit' value='save changes' name='submit'>

        <input type='submit' value='cancel' name='cancel'>
        ";
    return $form;
}
function ValidateField($FieldName, $ErrorMessage='<br/>required'){
    global $errors;
    if (!@$_REQUEST[$FieldName]) {
        $errors[$FieldName]=$ErrorMessage;
    }
}
function nextPost($link){
    echo "
    <div class='backNextOnViewPostPage'>
        <table>
            <tr>
                <th><a href='/blogContent/Myblog.php'>back to blog + inspiration home</a></th>
                <th><a href='$link'>next post</a></th>
            </tr>
        </table>
    </div>";
}

function blogPost($header,$body){
    echo "
    <div class='parent'>
        <div class='child1'>
            <div class='postSubHeader'>
                <h2>$header:</h2>
            </div>
            <div class='postBody'>
                $body <br><br>
                <div class='blogCommentForm'>
                    <h3>Leave a comment:</h3>
                    <form action='' method='post'>
                    Name: <input type='text' name='name'><br>
                    Email: <input type='test' name='email'> <br>
                    Comment: <br> <textarea name='body' placeholder='Add a comment...' rows='10' cols='50'></textarea><br>
                    <input type='submit' value='Submit' name='submit'>
                    </form>
                </div>
                <div class='adminButton'>
                    <a href='/admin/adminPage.php'>Admin Page</a>
                </div>
            </div>
        </div>
        <div class='child2'>
            <div class='postSubHeader'>
                <h2>Comments:</h2>
            </div>
        </div>
    </div>";
}
function displayPostLinks($url='/blogContent/viewpost.php'){
    $display = post();
    foreach($display as $value) {
        echo "
        <a href='$url?postID=$value[blogPostID]'>$value[title]</a><br><br>
        ";
    }
}
