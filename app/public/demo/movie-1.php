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

<?php require_once "includes/header.php"; ?>

     <div class="container">
        <h1>The hunger games: part II</h1>
        <?php
        $vec = check_old_movie('2015');
         if( $vec >=40){?> 
         <h4><span class="badge bg-secondary">Old movie: <?php echo $vec ?> years </span></h4> ;
<?php } ?>

        <!-- Doua coloane: una imaginea, a doua descrierea -->
        <div class="container">
          <div class="row">
            <div class="col-4">
              <img src="http://pituveronicadomnica.local/The hunger games.jpg" class="card-img-top">
            </div>
            <div class="col-8">
              <p class="card-text">Katniss and a team of rebels from District 13 prepare for the final battle that will decide the fate of Panem.</p>
              <p class="card-text"> Year: 2015</p>
                <p class="card-text"> Runtime: <?php echo runtime_prettier(137) ?>   <!--2h17m--> </p>
                <p class="card-text"> Stars: Jennifer Lawrence, Josh Hutcherson, Liam Hemsworth </p>
                <p class="card-text"> Director: Francis Lawrence  </p>
            </div>
          </div>
        </div>
       </div>
<?php require_once "includes/footer.php";?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>