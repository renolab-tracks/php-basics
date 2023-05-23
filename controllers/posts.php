<?php
require  'constants.php';



$db = new Database(DB_DSN);


$pageTitle = 'My Posts';

$posts= $db->query('select * from posts')->fetchAll();


require 'views/posts.template.php';


