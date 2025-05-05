<?php include 'includes/header.php'; require 'config/db.php'; ?>
<div class='container mt-5 col-md-6'>
<h2>Register</h2>
<form method='post'>
<input class='form-control my-2' type='text' name='name' placeholder='Full Name' required>
<input class='form-control my-2' type='email' name='email' placeholder='Email' required>
<input class='form-control my-2' type='password' name='password' placeholder='Password' required>
<button class='btn btn-success' name='register'>Register</button>
</form>
<?php
if (isset($_POST['register'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')");
echo "<p class='text-success mt-2'>Registered successfully!</p>";
}
?>
</div>
<?php include 'includes/footer.php'; ?>