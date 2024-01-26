<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    require 'config/connexion.php';
    require 'Posts.class.php';

    $query = $db->prepare('SELECT * FROM posts JOIN categories ON posts.category = categories.id');
    $query->execute();
    $postsDatas = $query->fetchAll(PDO::FETCH_ASSOC);


    $posts = [];



    foreach ($postsDatas as $key => $postsData) {
        $post = new Posts("", "", "");
        $post->hydrate($postsData);
        $posts[] = $post;
    }



    echo "<pre>";
    var_dump($postsDatas);
    echo "</pre>";





    ?>

</body>

</html>