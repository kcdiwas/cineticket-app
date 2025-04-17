<?php 

require_once "./includes/header.php";

$movie_id = isset($_GET['movieId']) ? $_GET['movieId'] : 1;

$query = "SELECT * FROM movies where id = $movie_id";
$result = mysqli_query($conn, $query);

$movie = mysqli_fetch_assoc($result);

// Fetch show time
$show_query = "SELECT * FROM show_times WHERE movie_id = $movie_id";
$show_result = mysqli_query($conn, $show_query);
$show_times = mysqli_fetch_all($show_result, MYSQLI_ASSOC);
?>

<section id="booking-section">
    <div class="container">
        <div class="booking-container">
            <div class="booking-poster">
                <img src="<?= $movie['poster_url'] ?>" alt="">
            </div>
            <div class="booking-details">
                <h2 class="booking-title"><?= $movie['title'] ?></h2>
                <div class="booking-info">
                    <p>
                        <strong>Genre:</strong> <?= $movie['genre'] ?>
                    </p>
                    <p>
                        <strong>Duration:</strong> <?= $movie['duration'] ?>
                    </p>
                    <p>
                        <strong>Rs. <?= $movie['price'] ?></strong> per ticket
                    </p>
                </div>

                <form action="/process_booking.php" method="POST" id="booking-form">
                    <input type="hidden" name="movie_id" value="<?= $movie_id ?>">
                    <input type="hidden" name="selected_seats" id="selected-seats" value="">
                    <input type="hidden" name="total_price" id="total-price" value="0">
                    <div class="form-group">
                        <label for="">Select Date</label>
                        <select name="show_id" id="">
                            <?php foreach($show_times as $showTime): ?>
                            <option value="<?= $showTime['id'] ?>"><?= date('F d, Y - h:i:A',strtotime($showTime['datetime'])) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="seating-area">
                        <h3>Select Your Seat</h3>
                        <div class="screen"></div>
                        <div id="seats-container" class="seats-container">
                        </div>
                    </div>

                    <button type="submit" class="btn"> Confirm Booking</button>
                </form>
            </div>
        </div>
    </div>
</section>


<script>
 const movieTicketPrice = <?php echo $movie['price']; ?>;
</script>

<script src="./assets/js/booking.js"></script>
<?php 

require_once "./includes/footer.php";
?>