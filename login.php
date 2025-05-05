<?php include 'includes/header.php'; require 'config/db.php'; ?>
<div class='container mt-5 col-md-6'>
<h2>Login</h2>
<form method='post'>
<input class='form-control my-2' type='email' name='email' placeholder='Email' required>
<input class='form-control my-2' type='password' name='password' placeholder='Password' required>
<button class='btn btn-primary' name='login'>Login</button>
</form>
<?php
session_start();
if (isset($_POST['login'])) {
$email = $_POST['email'];
$res = $conn->query("SELECT * FROM users WHERE email='$email'");
if ($res->num_rows > 0) {
$row = $res->fetch_assoc();
if (password_verify($_POST['password'], $row['password'])) {
$_SESSION['user'] = $row['name'];
header("Location: dashboard.php");
} else echo "<p class='text-danger'>Wrong password</p>";
} else echo "<p class='text-danger'>User not found</p>";
}
?>
</div>
<?php include 'includes/footer.php'; ?>