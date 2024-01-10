<?php
// connect to the database
$conn = mysqli_connect("localhost", "root", "", "base");

// check if the form has been submitted
if (isset($_POST['submit'])) {
  // retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];

  // insert the user data into the database
  $sql = "INSERT INTO users(username, password, email) VALUES ('$username', '$password', '$email')";
  mysqli_query($conn, $sql);

  // redirect to the login page
  header("Location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
</head>
<body>
  <h1>Sign Up</h1>
  <form method="post">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <label>Email:</label>
    <input type="email" name="email" required>
    <br>
    <input type="submit" name="submit" value="Sign Up">
  </form>
</body>
</html>
