<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pîțu Veronica-Domnica</title>

    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>


<!--array multidimensional cu meniul-->

<?php 
      $meniu = array(
      array(
      'nume' => 'Home' ,
      'elemlink' => 'index.php'
      ),
      array(
        'nume' => 'Movies' ,
        'elemlink' => 'movies.php'
        ),
      array(
        'nume' => 'Contact' ,
        'elemlink' => 'contact.php'
      ),
      array(
        'nume' => 'Genres' ,
        'elemlink' => 'genres.php'
      )
      ); 

      $calea_curenta = $_SERVER['PHP_SELF'];
      $calea_curenta_exploaded = explode("/",$calea_curenta);
      $fisierul_curent = end($calea_curenta_exploaded);

?>

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PVD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNav">
         <ul class="navbar-nav">
       
    <?php
      foreach($meniu as $element){
        echo '<li class="nav-item">'; ?>

        <a class="nav-link <?php if($element['elemlink']== $fisierul_curent){echo 'active';} ?>" 
         href=<?php echo $element['elemlink']?>><?php echo $element['nume']?>
        </a>
<?php } include_once "includes/search-form.php"; ?>
       </li>
      </ul>
    </div>
  </div>
</nav>

<?php
$curent_url = basename($_SERVER["PHP_SELF"]);
if(!in_array($curent_url,['contact.php','index.php']))
{
  $movies = json_decode(file_get_contents('./assets/movies-list-db.json'), true)['movies'];
}


?>

<?php 
    require_once "includes/functions.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>