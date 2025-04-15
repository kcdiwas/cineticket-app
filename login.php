<?php 
 
require_once "./includes/header.php";

if (isLoggedIn()) {
    header('Location: /index.php');
    exit();
}

$errorMessage = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    if (empty($username) || empty($password)) {
        $errorMessage = "Please enter both username and password.";
    } else {
        $sql = "SELECT id,username, password from users where username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $user_data = mysqli_fetch_assoc($result);
            if (password_verify($password, $user_data['password'])) {
                $_SESSION['user_id'] = $user_data['id'];
                $_SESSION['username'] = $user_data['username'];

                header('Location: /index.php');
                exit();
            } else {
                $errorMessage = "Invalid Password.";
            }
        } else {
            $errorMessage = "Username doesn't exist";
        }
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
            <h2 class="form-title">Login to Your Account</h2>
            <form action="/login.php" method="POST" id="login-form">
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