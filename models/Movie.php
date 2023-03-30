<?php

class Movie
{
    public string $title;
    public string $director;
    public string $genre;
    public INT $year;
   

    public function __construct($_title, $_director, $_genre, $_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    function getInfo() {
        return $this->director." " . $this->genre." " . $this->year;
      }
}