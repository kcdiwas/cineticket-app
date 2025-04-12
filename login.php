<?php 

require_once "./includes/header.php";

?>

<section class="form-section">
    <div class="container">
        <div class="form-container">
            <h2 class="form-title">Login to Your Account</h2>
            <form action="" id="login-form">
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="" required />
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" />
                </div>

                <button type="submit" class="form-btn">Login</button>

                <div class="form-footer">
                    <p>
                        Don't have an account ? <a href="/register.php">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>


<?php 

require_once "./includes/footer.php";

?>