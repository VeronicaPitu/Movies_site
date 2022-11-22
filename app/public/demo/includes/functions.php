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
function runtime_prettier($lung_min)
{
if($lung_min>59)
{
    $hours = intdiv($lung_min, 60);
    $min = $lung_min%60;
}

if($hours == 1 && $min == 1)  echo $hours." hour ".$min." minute";
elseif($hours > 1 && $min == 1) echo $hours." hours ".$min." minute";
elseif($hours > 1 && $min > 1) echo $hours." hours ".$min." minutes";
else echo $hours." hour ".$min." minutes";
}

function check_old_movie($an_apartitie)
{
$vechime_film = date("Y") -$an_apartitie;
if($vechime_film>40)
return $vechime_film;
else return false; 
}


//gasirea filmului dupa id
function find_movie_by_id($item)
{
    if(!isset($_GET['movie_id']))
     return false;
    if($item['id'] === intval($_GET['movie_id']))
    { 
        return true;
    }
    else return false;
}

//gasirea filmului dupa titlu
function find_movie_by_title($item)
{
    if(stripos($item['title'],$_GET['search']) === false){
     return false;
    }else
    return true;
}
function find_by_genre($item)
{
    $genr = $item['genres'];  
    $b = join( ',', $genr);
    if(stripos($b,$_GET['genre']) === false){
        return false;
       }else
       return true;
}

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>