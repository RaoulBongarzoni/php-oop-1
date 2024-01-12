<?php
class Movie
{
    public $name;
    public $director;
    public $genre;
    public $year;
    public $synopsis;
    public $poster;

    public function __construct($nome, $regista, $genere, $anno, $sinossi, $locandina)
    {
        $this->name = $nome;
        $this->director = $regista;
        $this->genre = $genere;
        $this->year = $anno;
        $this->synopsis = $sinossi;
        $this->poster = $locandina;
    }

    public function getInfo()
    {
        $info = $this->name . ' (' . $this->year . ') ' . 'directed by' . $this->director;
        return $info;
    }
}
