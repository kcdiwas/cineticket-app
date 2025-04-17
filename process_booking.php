<?php 

require_once "./includes/header.php";


if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$movie_id = $_POST['movie_id'];
$show_time_id = $_POST['show_id'];
$selected_seats = $_POST['selected_seats'];
$total_price = $_POST['total_price'];
$booking_reference = "BK" . time() . rand(1000,9999);

$booking_query = "INSERT INTO bookings (user_id,movie_id,show_time_id,booking_reference,total_amount,booking_date)
VALUES(?,?,?,?,?,NOW())
";

$stmt = mysqli_prepare($conn, $booking_query);
mysqli_stmt_bind_param($stmt, "iiisi", $user_id, $movie_id, $show_time_id, $booking_reference, $total_price);
mysqli_stmt_execute($stmt);