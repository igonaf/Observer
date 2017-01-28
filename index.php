<?php

require_once 'Classes/Category.php';
require_once 'Classes/Post.php';
require_once 'Classes/Subscriber.php';

$cat1 = new Category('Wordpress');
$cat2 = new Category('Yii2');

$post1 = new Post('WordPress Hooks');
$post2 = new Post('Creating a Custom WordPress Messaging System');
$post3 = new Post('Yii2 Introduction');
$post4 = new Post('Best Practices with Yii2');

$post1->setDescription('Text Text Text for '. $post1->getTitle());
$post2->setDescription('Text Text Text for '. $post2->getTitle());
$post3->setDescription('Text Text Text for '. $post3->getTitle());
$post4->setDescription('Text Text Text for '. $post4->getTitle());

$cat1->addPost($post1);
$cat1->addPost($post2);
$cat2->addPost($post3);
$cat2->addPost($post4);

$subscriber1 = new Subscriber('Igor', 'Igor@gmail.com', 'editor');
$subscriber2 = new Subscriber('Vlad', 'Vlad@gmail.com', 'subscriber');
$subscriber3 = new Subscriber('Lena', 'lena@gmail.com', 'editor');
$subscriber4 = new Subscriber('Jon', 'Jon@gmail.com', 'subscriber');

$cat1->addObserver($subscriber1);
$cat1->addObserver($subscriber2);
$cat2->addObserver($subscriber3);
$cat2->addObserver($subscriber4);

$cat1->notify('editor', $post1);
echo '----------------<br>';
$cat1->notify('subscriber', $post2);
echo '----------------<br>';
$cat2->notify('editor', $post3);
echo '----------------<br>';
$cat2->notify('subscriber', $post4);
