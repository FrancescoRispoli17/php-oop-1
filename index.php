<?php

class Movies{

    public function __construct(private string $title, private string $country, private string $director, private string $genre)
    {
        $this->title=$title;
        $this->country=$country;
        $this->director=$director;
        $this->genre=$genre;
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
    public function getGenre(){
        return $this->genre;
    }
    public function setGenre($text){
        if (!is_string($text))
            throw new Exception('Attenzione, devi passare una stringa');
        else
            $this->genre=$text;
    }
}

$halloween= new Movies('Halloween','USA','Jhon Carpenter','horror',true);
$mad_max= new Movies('Mad Max Fury Road', 'USA','George Miller', 'action',true);

// try{
//     echo $halloween->setTitle(5);
// }catch(Exception $error){
//     echo $error->getMessage();
// }
// var_dump($halloween);
// echo '<hr>'.$halloween->getTitle();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Class Movie</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-6 text-center fs-4 fw-semibold">
                <div><?php echo $halloween->getTitle(); ?> </div>
                <div><?php echo $halloween->getCountry(); ?> </div>
                <div><?php echo $halloween->getDirector(); ?> </div>
                <div><?php echo $halloween->getGenre(); ?> </div>
            </div>
            <div class="col-6 text-center fs-4 fw-semibold">
                <div><?php echo $mad_max->getTitle(); ?> </div>
                <div><?php echo $mad_max->getCountry(); ?> </div>
                <div><?php echo $mad_max->getDirector(); ?> </div>
                <div><?php echo $mad_max->getGenre(); ?> </div>
            </div>
        </div>
    </div>
</body>
</html>