<?php include 'includes/header.php'; require 'config/db.php'; ?>
<div class='container mt-5 col-md-6'>
<h2>Contact Me</h2>
<form method='post'>
<input class='form-control my-2' type='text' name='name' placeholder='Name' required>
<input class='form-control my-2' type='email' name='email' placeholder='Email' required>
<textarea class='form-control my-2' name='message' placeholder='Message' required></textarea>
<button class='btn btn-warning' name='send'>Send Message</button>
</form>
<?php
if (isset($_POST['send'])) {
$n = $_POST['name']; $e = $_POST['email']; $m = $_POST['message'];
$conn->query("INSERT INTO contact_messages (name, email, message) VALUES ('$n','$e','$m')");
echo "<p class='text-success mt-2'>Message sent!</p>";
}
?>
</div>
<?php include 'includes/footer.php'; ?>