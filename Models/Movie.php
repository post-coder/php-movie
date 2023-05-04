<?php

class Movie {

  public $title;
  public $length;
  public $producer;
  public $genres;

  function __construct(string $title, int $length, string $producer, array $genres) {
    $this->title = $title;
    $this->length = $length;
    $this->producer = $producer;
    $this->genres = $genres;
  }

  public function getLengthHours() {
    // prende la lunghezza in minuti e la converte in ore, approssimate

    $hoursLength = floor($this->length / 60);

    if($hoursLength > 1) {
      return $hoursLength . ' ore';
    } else {
      return '1 ora';
    }

  }

  public function getGenresNames() {

    // $this->genres mi restituisce un array di OGGETTI
    // di questi oggetti devo prendere solo titolo
    // però anche il colore

    $genresNames = [];

    foreach($this->genres as $genre) {
      $genresNames[] = $genre->name;
    }

    return implode(" - ", $genresNames);
  }
}
