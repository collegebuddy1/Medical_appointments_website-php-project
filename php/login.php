<?php
// start the session
session_start();

// connect to the database
$conn = mysqli_connect("localhost", "root", "", "base");

// check if the form has been submitted
if (isset($_POST['submit'])) {
  // retrieve the form data
  $username = $_POST['username'];
  $password = $_POST['password'];

  // query the database for the user
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  // check if the query executed successfully
  if (!$result) {
    // display an error message and exit
    echo "Error: " . mysqli_error($conn);
    exit;
  }

  // check if the user exists
  if (mysqli_num_rows($result) == 1) {
    // set the session variable
    $_SESSION['username'] = $username;

    // redirect to the home page
    header("Location: home.php");
    exit;
  } else {
    // display an error message
    echo "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form method="post">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>
