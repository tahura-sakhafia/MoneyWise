<?php
include 'config.php';

if(isset($_POST['submit'])){
   $fname = mysqli_real_escape_string($conn, $_POST['user_fname']);
   $lname = mysqli_real_escape_string($conn, $_POST['user_lname']);
   $gender = mysqli_real_escape_string($conn, $_POST['user_gender']);
   $phone = mysqli_real_escape_string($conn, $_POST['phone_num']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select_user = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_user) > 0){
      $message[] = 'User already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'Confirm password does not match!';
      }else{
         mysqli_query($conn, "INSERT INTO `user`(user_fname, user_lname, user_gender, phone_num, email, password) VALUES('$fname', '$lname', '$gender', '$phone', '$email', '$pass')") or die('query failed');
         $message[] = 'Registered successfully. Welcome to MoneyWise!';
         header('location: login.php');
         exit();
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <body class="light-theme">

</head>
<body>
<?php
if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<div class="form-container">
   <form action="" method="post">
      <h3>Register now</h3>
      <input type="text" name="user_fname" placeholder="Enter your first name" required class="box">
      <input type="text" name="user_lname" placeholder="Enter your last name" required class="box">
      <select name="user_gender" class="box">
         <option value="male">Male</option>
         <option value="female">Female</option>
      </select>
      <input type="tel" name="phone_num" placeholder="Enter your phone number" required class="box">
      <input type="email" name="email" placeholder="Enter your email" required class="box">
      <input type="password" name="password" placeholder="Enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="Confirm your password" required class="box">
      <input type="submit" name="submit" value="Register now" class="btn">
      <p>Already have an account? <a href="login.php">Login now</a></p>
   </form>
</div>
</body>
</html>
<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css');

body {
  margin: 0;
  padding: 0;
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

/* Light Theme */
.light-theme {
  --primary-color: #0066cc;
  --text-color: #333;
  --background-color: #fff;
}

/* Dark Theme */
.dark-theme {
  --primary-color: #ff8800;
  --text-color: #fff;
  --background-color: #333;
}

.message {
  position: fixed;
  top: 20px;
  right: 20px;
  background-color: var(--background-color);
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
}

.message span {
  margin-right: 10px;
  color: var(--text-color);
}

.message i {
  cursor: pointer;
  color: var(--text-color);
}

.form-container {
  max-width: 400px;
  margin: 100px auto;
  background-color: var(--background-color);
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 20px;
  color: var(--text-color);
}

.form-container h3 {
  text-align: center;
  margin-bottom: 20px;
}

.form-container .box {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  color: var(--text-color);
}

.form-container select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  outline: none;
  appearance: none;
  -webkit-appearance: none;
  background-image: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns%3D"http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg" width%3D"24" height%3D"24" viewBox%3D"0 0 24 24" fill%3D"none" stroke%3D"%23000000" stroke-width%3D"2" stroke-linecap%3D"round" stroke-linejoin%3D"round"%3E%3Cpolygon points%3D"6 9 12 15 18 9"%3E%3C%2Fpolygon%3E%3C%2Fsvg%3E');
  background-repeat: no-repeat;
  background-position: right 10px center;
  color: var(--text-color);
}

.form-container .btn {
  width: 100%;
  padding: 10px;
  background-color: var(--primary-color);
  color: var(--background-color);
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  font-weight: bold;
}

.form-container p {
  text-align: center;
  margin-top: 20px;
  color: var(--text-color);
}

.form-container p a {
  color: var(--primary-color);
  text-decoration: none;
}

.form-container p a:hover {
  text-decoration: underline;
}

</style>