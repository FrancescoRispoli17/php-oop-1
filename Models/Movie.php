<?php 
require_once __DIR__ . '/Actor.php';

class Movie{
    private array $genre=[];
    private ?Actor $actors=null;
    private static int $id=0;

    public function __construct(private string $title, private string $country, private string $director )
    {
        $this->id=self::$id++;
        $this->title=$title;
        $this->country=$country;
        $this->director=$director;
    }
    public function __destruct()
    {
        
    }
    public function getTitle(){
        return $this->title;
    }
    public function setTitle($text){
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->title=$text;
    }
    public function getCountry(){
        return $this->country;
    }
    public function setCountry($text){
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->country=$text;
    }
    public function getDirector(){
        return $this->director;
    }
    public function setDirector($text){
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->director=$text;
    }
    public function getGenre():array{
        return $this->genre;
    }
    public function setGenre(string ...$text)
    {
        if (!is_array($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->genre = [...$this->genre, ...$text];
    }
    public function getActor(): ?Actor{
        return $this->actors;
    }
     public function setActor(Actor $text)
     {
        $this->actors=$text;
     }
}

?>