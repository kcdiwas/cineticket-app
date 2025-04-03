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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineTicket - Book Movie Tickets Online</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="/" class="logo">
                    Cine<span>Ticket</span>
                </a>
                <div class="nav-links">
                    <a href="/">Home</a>
                    <a href="/movies">Movies</a>
                    <a href="/about">About</a>
                    <a href="/contact">Contact</a>
                </div>

                <div class="auth-links">
                    <a class="login" href="/login">Login</a>
                    <a class="register" href="/register">Register</a>
                </div>

            </nav>
        </div>
    </header>


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


    <!-- Footer Start -->
     <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3 class="footer-title">CineTicket</h3>
                    <p>
                        Your premier destination for booking movie tickets online.
                        Experience the magic of cinema with ease.
                    </p>
                </div>

                <div class="footer-section">
                    <h3 class="footer-title">Quick Links</h3>
                    <div class="footer-links">
                        <a href="">Home</a>
                        <a href="">Movies</a>
                        <a href="">About</a>
                        <a href="">Contact</a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3 class="footer-title">User Account</h3>
                    <div class="footer-links">
                        <a href="">Login</a>
                        <a href="">Register</a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3 class="footer-title">Follow Us</h3>
                    <div class="social-links">
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>
                    &copy; 2025 CineTicket. All Rights Reserved.
                </p>
            </div>

        </div>
     </footer>

</body>
</html>