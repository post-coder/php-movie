<?php

require_once './Models/Movie.php';
require_once './Models/Genre.php';

$genres = [
  "action" => new Genre('action', '#ff4444'), 
  "fantasy" => new Genre('fantasy', '#9911aa'),
  "animation" => new Genre('animation', '#11dd33'),
  "adventure" => new Genre('adventure', '#aa3322')
];

// var_dump($genres);


$guardiansOfGalaxy = new Movie("Guardians Of The Galaxy Vol. 3", 150, "Disney", [$genres['action'], $genres['fantasy']]);
$marioBros = new Movie("The Super Mario Bros. Movie", 92, "Universal", [$genres['animation'], $genres['adventure']]);


$movies = [
  $guardiansOfGalaxy,
  $marioBros
];

// var_dump($movies[1]);