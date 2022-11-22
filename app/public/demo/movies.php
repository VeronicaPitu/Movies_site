<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pîțu Veronica-Domnica</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="header.php">
    <link rel="stylesheet" href="footer.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
<?php 
    require_once "includes/header.php";
    require_once "includes/functions.php";
?>

<?php

if(isset($_GET['genre']))
{
    //afisam doar un gen
    
    $movies_g = array_filter($movies,'find_by_genre');
?>
    <h1><?php echo $_GET['genre']." "." Movies"?></h1>
<?php
 $movies_a = $movies_g;
 
}else{ //afisam toate filmele
?>
 <h1>Movies</h1>
<?php
 $movies_a = $movies;
}
?>

   
<div class="row movie-list ">

<?php 
foreach($movies_a as $movie)
{ ?>

   <div class="col-lg-4">
         <div class="card" >
            <img src="<?php echo $movie['posterUrl'] ?>" class="card-img-top">
             <alt=" <?php echo $movie['posterUrl'] ?> ">
                <div class="card-body">
                  <h5 class="title"><?php echo $movie['title'] ?></h5>
                  <p class="card-text"><?php echo $movie['plot']."..."?></p>
                  <a href=<?php echo "./movie.php?movie_id=".$movie['id']?> class="btn btn-primary">Read more</a>
                </div>
         </div>
   </div>
<?php }
 ?>
</div>

<?php 
    require_once "includes/footer.php";
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>