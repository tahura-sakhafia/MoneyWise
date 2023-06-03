        <!--<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Secure password hashing
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $select_user = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'") or die('Query failed');

    if (mysqli_num_rows($select_user) > 0) {
         
            $_SESSION['email'] = $row['email'];
            header('Location: homepage.php');
            exit();
        } else {
            $message = 'Incorrect email or password!';
        }
    }
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoneyWise</title>
    <!-- Add your CSS stylesheets and other head elements here -->
</head>

<body>
    <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <?php if (isset($message)) : ?>
            <div>
                <p><?php echo $message; ?></p>
            </div>
        <?php endif; ?>

        <!-- Rest of your HTML code -->
    </div>
    <!-- Add your JavaScript files here -->
</body>

</html>
