<?php 

$movies = [
    [
        'name' => 'Basanta',
        'poster' => 'https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1742298334059-basanta.jpg',
        'info' => [
            'Drama',
            '160min'
        ],
        'time' => [
            '8:00am',
            '11:00am',
            '2:00pm'
        ]
    ],
    [
        'name' => 'A Minecraft Movie',
        'poster' => 'https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1742822291513-minecraft500x715.jpg',
        'info' => [
            'Drama',
            '101min'
        ],
        'time' => [
            '8:00am',
            '11:00am',
            '2:00pm'
        ]
    ],
];



?>

    <!-- include, include_once, require, require_once -->
   <?php 
        require_once "./includes/header.php" 
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
                    <img src="<?= $movie['poster'] ?>" class="movie-poster" alt="">
                    <div class="movie-details">
                        <h3 class="movie-title"><?= $movie['name'] ?></h3>
                        <div class="movie-info">
                            <?php foreach($movie['info'] as $info): ?>
                                <span><?= $info ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="movie-times">
                            <?php foreach($movie['time'] as $time): ?>
                            <span class="movie-time"><?= $time ?></span>
                            <?php endforeach; ?>
                        </div>
                        <a href="" class="book-btn">Book Ticket</a>
                    </div>
                 </div>
                 <?php endforeach; ?>
            </div>

        </div>
    </section>


<?php 
require_once "./includes/footer.php";
?>