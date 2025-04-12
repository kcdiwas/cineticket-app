<?php 

require_once "./includes/header.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get Form Data 
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $full_name = trim($_POST['full_name']);

    // Validate Input
    if (empty($username) || empty($email) || empty($password) ||
        empty($confirm_password) || empty($full_name)
    ) {
        $errorMessage = "Please fill in all required fields";
    } else if (strlen($username) < 3) {
        $errorMessage = "Username must be at least 3 characters long";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please enter a valid email address";
    } else if (strlen($password) < 6) {
        $errorMessage = "Password must be at least 6 characters long";
    } else if ($password !== $confirm_password) {
        $errorMessage = "Passwords do not match";
    } else {
        // Perform Registration Work
    }
}



?>

<section class="form-section">
    <div class="container">
        <div class="form-container">
            <?php if(!empty($errorMessage)): ?>
                <div class="error-message">
                    <?= $errorMessage ?>
                </div>
            <?php endif; ?>
            <h2 class="form-title">Create an Account</h2>
            <form action="/register.php" method="POST" id="register-form">
                <div class="form-group">
                    <label for="">Full Name</label>
                    <input type="text" name="full_name" required />
                </div>

                <div class="form-group">
                    <label for="">Email Addres</label>
                    <input type="email" name="email" id="">
                </div>

                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" id="">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="">
                </div>

                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" id="">
                </div>

                <button type="submit" class="form-btn">Register</button>

                <div class="form-footer">
                    <p>
                        Already have account ? <a href="/login.php">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>


<?php 

require_once "./includes/footer.php";

?>