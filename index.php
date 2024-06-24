<?php

class Movies{

    public function __construct(private string $title, private string $country, private string $director, private string $genre, private bool $watched)
    {
        $this->title=$title;
        $this->country=$country;
        $this->director=$director;
        $this->genre=$genre;
        $this->watched=false;
    }
    public function __destruct()
    {
        
    }
}

$halloween= new Movies('Halloween','USA','Jhon Carpenter','horror',true);

var_dump($halloween);

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
    
</body>
</html>