<?php

$genres = json_decode(file_get_contents('./assets/movies-list-db.json'), true)['genres'];
foreach($genres as $genre)
{?>
<div class="container text-center">
<div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
       <div class="p-3 border bg-light"><?php echo $genre?></div>
        <h5 ><?php echo $genre?></h5>
        <p class="card-text"></p>
        <a href=<?php echo "./movies.php?genre=".$genre?> class="btn btn-primary">See more</a>
      </div>
    </div>
  </div>
</div>

<?php
}
?>