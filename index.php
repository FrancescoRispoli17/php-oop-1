<?php
require_once __DIR__ . '/Models/Movie.php';

 try{
    $actor1= new Actor('Tom','Hardy','USA');
    $actor2= new Actor('Jamie ','Lee Curtis','USA');
    $halloween= new Movie('Halloween','USA','Jhon Carpenter',$actor1);
    $mad_max= new Movie('Mad Max Fury Road', 'USA','George Miller',$actor2);
    $halloween->setGenre('Horror');
    $mad_max->setGenre('action', 'post apocalict');
    $movies=[$halloween,$mad_max];
 }catch(Exception $error){
    echo $error->getMessage();
 }




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
                <!-- <h1>Add Movie</h1>
                <form action="index.php" method="GET">
                    <div class="row align-items-center">
                        <div class="col-3 px-5">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="title">
                        </div>
                        <div class="col-2 px-1">
                            <label for="exampleFormControlInput1" class="form-label">Country</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">USA</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japon">Japon</option>
                                    <option value="Korea">Korea</option>
                                    <option value="Germany">Germany</option>
                                    <option value="France">France</option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="China">China</option>
                                </select>
                        </div>
                        <div class="col-3 px-5">
                            <label for="exampleFormControlInput1" class="form-label">Director</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="Director">
                        </div>
                        <div class="col-2 px-1">
                            <label for="exampleFormControlInput1" class="form-label">Genre</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="genre">
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-primary mt-4">Primary</button>
                        </div>
                    </div>
                </form> -->
            <?php foreach( $movies as $movie) : ?>
                <div class="col-6 text-center fs-4 fw-semibold">
                    <div><?php echo $movie->getTitle(); ?> </div>
                    <div><?php echo $movie->getCountry(); ?> </div>
                    <div><?php echo $movie->getDirector(); ?> </div>
                    <?php foreach( $movie->getGenre() as $genre) : ?>
                        <div><?php echo $genre; ?> </div>
                    <?php endforeach; ?>
                    <h2>Actors</h2>
                    <span><?php echo $movie->getActor()->getName(); ?> </span>
                    <span><?php echo $movie->getActor()->getSurname(); ?> </span>
                    <div>nationality: <?php echo $movie->getActor()->getNationality(); ?> </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>