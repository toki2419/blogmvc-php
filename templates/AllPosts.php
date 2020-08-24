<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='./css/AllPosts.css' />
    <title>Blog all post</title>
</head>
<body>
    
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <img src="<?php echo($post['url_thumbnail']) ?>"/>
            <a href="#" class="title"> <?php echo($post['title']) ?> </a>
            <div class="time-tag">
                <div class="time">Created: <?php echo($post['time']) ?></div>
                <div class="tag">
                    <a href="#"> <?php echo($post['tag']) ?></a>
                </div>
            </div>
            <p class="content"> <?php echo($post['content']) ?> </p>
        </div>
    <?php endforeach; ?>


</body>
</html>