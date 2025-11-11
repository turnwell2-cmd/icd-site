<?php
// admin.php — Manage Shipments

// Database setup
$db_file = __DIR__ . '/includes/icd.sqlite';
$db = new PDO('sqlite:' . $db_file);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Handle status update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $stmt = $db->prepare("UPDATE shipments SET status = :status WHERE id = :id");
    $stmt->execute([':status' => $status, ':id' => $id]);

    echo "<p style='color: green; text-align:center;'>✅ Shipment #$id status updated to '$status'</p>";
}

// Get all shipments
$shipments = $db->query("SELECT * FROM shipments ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 20px;
  background: #f8f8f8;
}
h1 {
  text-align: center;
}
table {
  width: 100%;
  border-collapse: collapse;
  background: white;
}
th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}
th {
  background: #333;
  color: white;
}
form {
  margin: 0;
}
select, button {
  padding: 5px 8px;
  font-size: 14px;
}
a {
  text-decoration: none;
  color: #007bff;
}
</style>
</head>
<body>
<h1>Admin Dashboard</h1>
<table>
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

<?php if (count($shipments) === 0): ?>
<tr><td colspan="9">No shipments found.</td></tr>
<?php else: ?>
<?php foreach ($shipments as $s): ?>
<tr>
  <td><?= htmlspecialchars($s['id']) ?></td>
  <td><?= htmlspecialchars($s['tracking_no']) ?></td>
  <td><?= htmlspecialchars($s['sender_name']) ?></td>
  <td><?= htmlspecialchars($s['sender_city']) ?></td>
  <td><?= htmlspecialchars($s['receiver_city']) ?></td>
  <td><?= htmlspecialchars($s['service']) ?></td>
  <td><?= htmlspecialchars($s['package']) ?></td>
  <td><?= htmlspecialchars($s['status']) ?></td>
  <td>
    <form method="post">
      <input type="hidden" name="id" value="<?= $s['id'] ?>">
      <select name="status">
        <option value="Shipment Created" <?= $s['status']=='Shipment Created'?'selected':'' ?>>Shipment Created</option>
        <option value="In Transit" <?= $s['status']=='In Transit'?'selected':'' ?>>In Transit</option>
        <option value="Arrived at Facility" <?= $s['status']=='Arrived at Facility'?'selected':'' ?>>Arrived at Facility</option>
        <option value="Out for Delivery" <?= $s['status']=='Out for Delivery'?'selected':'' ?>>Out for Delivery</option>
        <option value="Delivered" <?= $s['status']=='Delivered'?'selected':'' ?>>Delivered</option>
      </select>
      <button type="submit" name="update_status">Update</button>
    </form>
  </td>
</tr>
<?php endforeach; ?>
<?php endif; ?>
</table>

<div style="text-align:center; margin-top:20px;">
  <a href="sp.html">➕ Create New Shipment</a> |
  <a href="tracking.php">🔍 Track a Shipment</a>
</div>

</body>
</html>
