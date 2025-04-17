<?php 
require_once "./includes/header.php";

// Fetch all movies
$query = "SELECT * FROM movies ORDER BY release_date DESC";
$result = mysqli_query($conn, $query);

$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($movies as $index => $movie) {
    $show_time_query = "SELECT * FROM show_times WHERE movie_id = {$movie['id']} LIMIT 3";
    $show_result = mysqli_query($conn, $show_time_query);
    $movies[$index]['times'] = mysqli_fetch_all($show_result, MYSQLI_ASSOC);
}

?>

    <!-- Hero Section --> 
     <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Experience the Magic of Cinema</h1>
                <p>Book your tickets online and enjoy the latest blockbusters</p>
                <a href="/movies" class="hero-btn">Explore Movies</a>
            </div>
        </div>
     </section>

     <!-- Booking Section -->
    <section id="movies" class="movies-section">
        <div class="container">
            <h2 class="section-title">Now Showing</h2>
            <div class="movies-grid">
                <!-- First Movie -->
                 <?php foreach($movies as $movie): ?>
                 <div class="movie-card">
                    <img src="<?= $movie['poster_url'] ?>" class="movie-poster" alt="">
                    <div class="movie-details">
                        <h3 class="movie-title"><?= $movie['title'] ?></h3>
                        <div class="movie-info">
                            <span><?= $movie['genre'] ?></span>
                            <span><?= $movie['duration'] ?></span>
                        </div>
                        <div class="movie-times">
                            <?php foreach($movie['times'] as $time): ?>
                                <span class="movie-time">
                                    <?= date('g:i A', strtotime($time['datetime']))  ?>
                                </span>
                            <?php endforeach; ?>
                            
                        </div>
                        <a href="/booking.php?movieId=<?= $movie['id'] ?>" class="book-btn">Book Ticket</a>
                    </div>
                 </div>
                 <?php endforeach; ?>
            </div>

        </div>
    </section>


<?php 
require_once "./includes/footer.php";
?>