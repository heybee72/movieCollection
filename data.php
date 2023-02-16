<?php

require_once 'classes/Actor.php';
require_once 'classes/Movie.php';

// Create some actors
$actor1 = new Actor(1, 'Tom Holland', '1996-06-01');
$actor2 = new Actor(2, 'Samuel L. Jackson', '1948-12-21');

$actor3 = new Actor(3, 'Eddie Murphy', '1961-07-09');
$actor4 = new Actor(4, 'James Earl Jones', '1931-07-09');
$actor5 = new Actor(5, 'Shari Headley', '1964-07-09');

$actor6 = new Actor(6, 'Emma Watson', '1990-04-15');
$actor7 = new Actor(7, 'Daniel Radcliffe', '1989-07-23');

// Create some movies
$movie1 = new Movie(1, 'Spider-Man: Far From Home', 142, '1994-07-06');
$movie1->addActor($actor1, 'Peter Parker');
$movie1->addActor($actor2, 'Nick Fury');

$movie2 = new Movie(2, 'Coming to America', 110, '1988-04-28');
$movie2->addActor($actor3, 'Akeem');
$movie2->addActor($actor4, 'King of Zamunda');
$movie2->addActor($actor5, 'Lisa McDowel');

$movie3 = new Movie(3, 'Harry Potter and the Philosopher\'s Stone', 152, '2001-11-04');
$movie3->addActor($actor6, 'Hermione Granger');
$movie3->addActor($actor7, 'Harry Potter');

?>