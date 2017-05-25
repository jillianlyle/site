<?php
function blogData () {
    $posts = array(
        0 => array(
            'postID' => 0,
            'header' => 'what im doing',
            'title' => 'what im doing',
            'body' => 'Im currently studying psychology and economics and Im hungry',
            'nextPost' => 1
        ),
        1 => array(
            'postID' => 1,
            'header' => 'what im listening',
            'title' => 'what im listening to',
            'body' => 'Thunder<br/>Im the one<br/>The Difference',
            'nextPost' => 2
        ),
        2=> array(
            'postID' => 2,
            'header' => 'favorites',
            'title' => 'my favorites',
            'body' => 'I like pasta, horses, spotify, and the ocean.',
            'nextPost' => 0
        )
    );
    return $posts;
}
function returnPostInformation ($postID) {
    $posts = blogData();
    $post= $posts[$postID];
    return $post;
}
