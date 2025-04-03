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
                 <div class="movie-card">
                    <img src="" class="movie-poster" alt="">
                    <div class="movie-details">
                        <h3 class="movie-title">Basanta</h3>
                        <div class="movie-info">
                            <span>Drama</span>
                            <span>2h30m</span>
                        </div>
                        <div class="movie-times">
                            <span class="movie-time">8:30PM</span>
                            <span class="movie-time">11:00AM</span>
                        </div>
                        <a href="" class="book-btn">Book Ticket</a>
                    </div>
                 </div>
            </div>

        </div>
    </section>

</body>
</html>