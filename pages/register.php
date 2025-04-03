<?php 

$pageTitle = "Register - CineTicket";
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validation
    if ($email == "") {
        $errors['email'] = "Email is required";
    }

    if ($fullname == "") {
        $errors['fullname'] = "Fullname is required";
    }

    if ($password == "") {
        $errors['password'] = "Password is required";
    }

    if ($confirm_password == "") {
        $errors['confirm_password'] = "Confirm Password is required";
    }

    if ($password != $confirm_password) {
        $errors['password'] = "Password doesn't match";
    }

    if (count($errors) === 0) {
        echo "Form submit";
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
</head>
<body>
    <h1><?= $pageTitle ?></h1>

    <?php if (count($errors) > 0): ?>
        <?php foreach($errors as $error): ?>
            <div><?= $error ?></div>
            <?php endforeach; ?>
    <?php endif; ?>
        

    <form method="post" action="register.php">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" id="">
        </div>

        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" name="fullname" id="">
        </div>

        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" id="">
        </div>

        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" id="">
        </div>

        <div>
            <button type="submit">Register</button>
        </div>

    </form>
</body>
</html>