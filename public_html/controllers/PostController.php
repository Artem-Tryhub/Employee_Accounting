<?php

class PostController
{
    public function actionIndex()
    {
        $posts = Post::getIdAndName();
        require_once(ROOT . '/views/post/index.php');
        return true;
    }
}