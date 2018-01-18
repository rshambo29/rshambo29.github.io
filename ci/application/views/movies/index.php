<div class="movie-container"> 
 <div class="page-header-movie">
        <div class="page-header-content">
            <h1>People Always Ask What My Favorite Movies Are</h1>
        </div>
        <div class="page-header-content">
            <h2>Well, here you go:</h2>
            <h5>(In no particular order)</h5>
        </div>
    </div>
<div class="movie-display">
<?php foreach ($movies as $movie_item): ?>
    <div class="movie-block">
        <h1><?php echo $movie_item['title_txt']; ?></h1>
        <br/>
        <p>Directed By: <?php echo $movie_item['full_name']; ?></p>
        <p>Year: <?php echo $movie_item['year'];?></p>
        <p>Legnth: <?php echo $movie_item['legnth'];?></p>
        <p>Category: <?php echo $movie_item['category'];?></p>
    </div>
<?php endforeach; ?>
</div>
<br/>
<br/>
</div>