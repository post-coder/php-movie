<?php

class Genre {
  public $name;
  public $color;

  function __construct(string $name, string $color)
  {
    $this->name = $name;
    $this->color = $color;
  }
}