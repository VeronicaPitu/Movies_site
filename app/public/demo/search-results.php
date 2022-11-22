<?php 
 require_once "includes/header.php";
 require_once "includes/search-form.php";
 require_once "includes/functions.php";
 ?>
 <?php
 $cuv_cautat = $_GET['search'];
    
 $lungime_cuvant = strlen($cuv_cautat);
 if($lungime_cuvant < 3)
 {
        echo "<br>";
        echo "  Please tape at least tree characters!";
        include "includes/search-form.php";
 }else{

    if(isset($cuv_cautat) && !empty( $cuv_cautat))
    {
        
        $movies_finder = array_filter($movies, 'find_movie_by_title');
        ?>
        <h1>Search results for:<?php echo $cuv_cautat?></h1> <?php
        include "includes/search-form.php";
        if(empty($movies_finder)){ ?>
         <h3>0 results for:<?php echo $cuv_cautat?> Try again!</h3> 
        <?php } ?>
    
        <div class="row movie-list ">
        <?php 
        foreach($movies_finder as $movie_finder)
        { ?>
        
           <div class="col-lg-4">
                 <div class="card" >
                    <img src="<?php echo $movie_finder['posterUrl'] ?>" class="card-img-top">
                     <alt=" <?php echo $movie_finder['posterUrl'] ?> ">
                        <div class="card-body">
                          <h5 class="title"><?php echo $movie_finder['title'] ?></h5>
                          <p class="card-text"><?php echo $movie_finder['plot']."..."?></p>
                          <a href=<?php echo "./movie.php?movie_id=".$movie_finder['id']?> class="btn btn-primary">Read more</a>
                        </div>
                 </div>
           </div>
  <?php }  ?>
        </div>
        <?php
    }else{
?>
        <h1>Movie page</h1>
        <p>You should tape a movie name!</p>
        <a href="movies.php" class="btn-primary">Back to all movies</a>
    <?php } 
}?>
<?php require_once "includes/footer.php"; ?>