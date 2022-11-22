<?php
require_once "includes/header.php";
require_once "includes/functions.php"; ?>
<?php 
$movie_id = $_GET['movie_id'];

$movie_f = array_filter($movies,'find_movie_by_id');

if(isset($movie_f) && $movie_f){
    $movie = reset($movie_f);
}

if(isset($movie) && $movie)
{?>
   <h1><?php echo $movie['title'];?></h1>
   <div class="row">
    <div class="col-md-4 col-lg-3">
    <img
        class="card-img-top"
        src="<?php echo $movie['posterUrl']; ?>"
        alt="<?php echo $movie['posterUrl']; ?>"
    />
</div> 
<div class="col-md-8 col-lg-9">
    <?php $old_movie = check_old_movie($movie['year']); ?>
    <div class="h3">
        <?php echo $movie['year']; ?>
        <?php if($old_movie){?>
          <span class="badge bg-secondary">Old movie:<?php echo $old_movie; ?>
        <?php } ?>
    </div>
    <div class="description" mb-3>
        <?php echo $movie['plot']; ?>
    </div>
    <?php if(isset($movie['director'])&& $movie['director']){ ?>
    <div class="mb-3">
        Directed by: <strong><?php echo $movie['director'];?></strong>
    </div>
    <?php } ?>
    <?php if(isset($movie['runtime']) && $movie['runtime']){ ?>
        <div class="mb-3">
          Runtime: <strong><?php echo runtime_prettier($movie['runtime']);?></strong>
        </div>
      <?php } ?>
      <?php if(isset($movie['actors']) && $movie['actors']){ ?>
        <h5>Cast:</h5>
        <?php 
        $actors = explode(', ', $movie['actors']);
        echo '<ul>';
        foreach($actors as $actor) {
            echo'<li>' ,$actor .'</li>';
        }
        echo '</ul>';
    ?>
    <?php } ?>
    <?php if(isset($movie['genres']) && $movie['genres']){ ?>
        <h5>Genres:</h5>
        <?php 
        $genres = $movie['genres'];  
        $b = join( ',', $genres);
        echo $b;
        echo ".";
      
    ?>
    <?php } ?>
   </div>
</div>



<?php }else{ ?>
     <h1>
        Movie Page
     </h1>
     <p>
        Erorr! No movie.
     </p>
     <a href="./movies.php" class="btn btn-primary">Back to all movies</a>
<?php } ?>
</div>
 <?php require_once "includes/footer.php"; ?>