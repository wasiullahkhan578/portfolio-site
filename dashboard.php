<?php session_start(); if (!isset($_SESSION['user'])) die('Access Denied'); include 'includes/header.php'; ?>
<div class='container mt-5'>
<h3>Welcome, <?php echo $_SESSION['user']; ?></h3>
<a href='logout.php' class='btn btn-danger'>Logout</a>
</div>
<?php include 'includes/footer.php'; ?>