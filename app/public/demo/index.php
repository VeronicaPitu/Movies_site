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

<?php 
    require_once "includes/header.php";
?>

<div class="container">
<?php 
      date_default_timezone_set( 'Europe/Bucharest' );
      $ora = date("H");
      if($ora>5 && $ora<=12 ) echo 'Good Morning!';
      elseif ($ora>12 && $ora<=17) echo 'Good Afternoon';
      elseif($ora>17 && $ora<=23)  echo 'Good Evening';
      else echo 'Good Night';
?>
    <h1>Bine ai venit! Iti dorim vizionare placuta!</h1>
</div>

<?php
include_once "includes/footer.php"; 
    #require_once('includes/footer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>