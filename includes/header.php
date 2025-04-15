<?php 
require_once "./config/db_connect.php";
if (session_status() === PHP_SESSION_NONE) {
    session_name('cineticket');
    session_start();
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function getUsername() {
    return isset($_SESSION['username']) ? $_SESSION['username'] : null;
}

ob_start();
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
                    <?php if(isLoggedIn()): ?>
                        <a href="/logout.php" class="login">Hi <?= getUsername() ?>! Wanna Logout ?</a>
                    <?php else: ?>
                    <a class="login" href="/login.php">Login</a>
                    <a class="register" href="/register.php">Register</a>
                    <?php endif; ?>
                </div>

            </nav>
        </div>
    </header>