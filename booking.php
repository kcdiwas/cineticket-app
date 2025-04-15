<?php 

require_once "./includes/header.php";
?>

<section id="booking-section">
    <div class="container">
        <div class="booking-container">
            <div class="booking-poster">
                <img src="https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1742298334059-basanta.jpg" alt="">
            </div>
            <div class="booking-details">
                <h2 class="booking-title">Movie Title</h2>
                <div class="booking-info">
                    <p>
                        <strong>Genre:</strong> Drama
                    </p>
                    <p>
                        <strong>Duration:</strong> 2h30m
                    </p>
                    <p>
                        <strong>Rs. 400</strong> per ticket
                    </p>
                </div>

                <form action="" id="booking-form">
                    <div class="form-group">
                        <label for="">Select Date</label>
                        <select name="" id="">
                            <option value="">9:00 AM</option>
                        </select>
                    </div>

                    <div class="seating-area">
                        <h3>Select Your Seat</h3>
                        <div class="screen"></div>
                        <div id="seats-container" class="seats-container">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<script src="./assets/js/booking.js"></script>
<?php 

require_once "./includes/footer.php";
?>