<?php
include __DIR__ . '/includes/db_connect.php';

// Password check via Render environment variable
$ADMIN_PASS = getenv('ADMIN_PASS') ?: 'admin123';
$pass = $_POST['pass'] ?? '';
if ($pass !== $ADMIN_PASS) {
    if ($pass !== '') echo "<p style='color:red;'>Incorrect password</p>";
    echo '<form method="post"><input type="password" name="pass" placeholder="Password"><button type="submit">Login</button></form>';
    exit;
}

// Update status if submitted
if (isset($_POST['update_status'], $_POST['id'])) {
    $stmt = $db->prepare("UPDATE tracking SET status = :status WHERE id = :id");
    $stmt->execute([':status' => $_POST['update_status'], ':id' => $_POST['id']]);
}

// Fetch all shipments
$shipments = $db->query("SELECT * FROM tracking ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Admin Dashboard</title></head>
<body>
<h1>Admin Dashboard</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Tracking #</th>
        <th>Customer</th>
        <th>Origin</th>
        <th>Destination</th>
        <th>Service</th>
        <th>Package</th>
        <th>Status</th>
        <th>Update Status</th>
    </tr>
    <?php foreach ($shipments as $s): ?>
    <tr>
        <td><?= $s['id'] ?></td>
        <td><?= htmlspecialchars($s['tracking_number']) ?></td>
        <td><?= htmlspecialchars($s['customer_name']) ?></td>
        <td><?= htmlspecialchars($s['origin']) ?></td>
        <td><?= htmlspecialchars($s['destination']) ?></td>
        <td><?= htmlspecialchars($s['service']) ?></td>
        <td><?= htmlspecialchars($s['package_content']) ?> (<?= htmlspecialchars($s['package_weight']) ?>)</td>
        <td><?= htmlspecialchars($s['status']) ?></td>
        <td>
            <form method="post" style="margin:0">
                <input type="hidden" name="id" value="<?= $s['id'] ?>">
                <select name="update_status">
                    <option <?= $s['status'] === 'On Standby' ? 'selected' : '' ?>>On Standby</option>
                    <option <?= $s['status'] === 'On Moving' ? 'selected' : '' ?>>On Moving</option>
                    <option <?= $s['status'] === 'Delivered' ? 'selected' : '' ?>>Delivered</option>
                </select>
                <button type="submit">Update</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
