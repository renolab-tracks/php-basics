<?php
require  'constants.php';
require 'Validator.php';

$db = new Database(DB_DSN);
$pageTitle = "Create Post";

$id = $_GET['id'];

$post  = $db->query('select * from posts where id=:id', [
    'id' => $id,
])->fetch();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $post_id = $_POST['post_id'];

    
    $errors = [];

    if (!Validator::string($_POST['title'], 1, 10)) {
        $errors['title'] = 'A title of no more than 10 characters is required.';
    }

    if(empty($errors)) {

        if(isset($post_id)){
            $db->query('UPDATE posts SET title=:title WHERE id=:post_id', [
                'title' => $_POST['title'],
                'post_id' => $post_id,
            ]);

        }
        else {

            $db->query('INSERT INTO posts(title) VALUES(:title)', [
                'title' => $_POST['title'],
            ]);
        }
        
        header('Location: '.'/posts');
        die();
        }
}



require 'views/posts.create.template.php';

