<?php
    class PostController{
        public function getPost(){
            require_once('models/PostModel.php');
            $postModel = new PostModel();
            $posts = $postModel->getPost();
            
            require_once('views/PostView.php');
            $postView = new PostView();
            $postView->showAllPosts($posts);
        }
    }
?>