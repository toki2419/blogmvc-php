<?php
    class PostModel{
        public function getPost(){
            $con = mysqli_connect('localhost', 'root', '', 'blogmvc-php');
            mysqli_set_charset($con, 'utf8');
            if(mysqli_connect_errno()) echo('Fail to connect').mysqli_connect_error();
            $sql = "SELECT * FROM blog-posts";
            $result = $con->query('SELECT * FROM blog_posts');
            $posts = array();
            if($result->num_rows > 0){
                while($post = mysqli_fetch_assoc($result))
                    $posts[] = $post;
            }
            return $posts;
        }
    }
?>