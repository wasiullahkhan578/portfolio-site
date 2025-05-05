<?php require '../config/db.php'; ?>
<h3>Admin Panel - Messages</h3>
<table border="1" cellpadding="10">
    <tr><th>Name</th><th>Email</th><th>Message</th><th>Time</th></tr>
    <?php
    $res = $conn->query("SELECT * FROM contact_messages ORDER BY id DESC");
    while ($row = $res->fetch_assoc()) {
        echo "<tr>
            <td>{$row['name']}</td><td>{$row['email']}</td>
            <td>{$row['message']}</td><td>{$row['created_at']}</td>
        </tr>";
    }
    ?>
</table>
<a href='logout.php'>Logout</a>