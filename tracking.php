<?php
include __DIR__ . '/includes/db_connect.php';

$tn = trim($_POST['tracking_number'] ?? ($_GET['tracking_number'] ?? ''));
?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><title>Track Shipment</title></head>
<body>
<h1>Track Your Shipment</h1>

<?php if ($tn === ''): ?>
<form method="post" action="tracking.php">
    <label for="tracking_number">Tracking number</label>
    <input type="text" name="tracking_number" id="tracking_number">
    <button type="submit">Track</button>
</form>
<?php else: 
$stmt = $db->prepare("SELECT * FROM tracking WHERE tracking_number = :t LIMIT 1");
$stmt->execute([':t' => $tn]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row):
?>
<h2>Tracking Number: <?= htmlspecialchars($row['tracking_number']) ?></h2>
<p>Status: <strong><?= htmlspecialchars($row['status']) ?></strong></p>
<p>Service: <?= htmlspecialchars($row['service']) ?></p>
<p>Package Content: <?= htmlspecialchars($row['package_content']) ?></p>
<p>Package Weight: <?= htmlspecialchars($row['package_weight']) ?></p>
<p>Declared Value: <?= htmlspecialchars($row['declared_value']) ?></p>
<p>Additional Services: <?= htmlspecialchars($row['additional_services']) ?></p>
<p>Third Party Account: <?= htmlspecialchars($row['third_party_account']) ?></p>
<p>From: <?= htmlspecialchars($row['origin']) ?> — To: <?= htmlspecialchars($row['destination']) ?></p>
<p>Notes: <?= nl2br(htmlspecialchars($row['notes'])) ?></p>
<p>Created: <?= htmlspecialchars($row['created_at']) ?></p>
<?php else: ?>
<p>No record found for <strong><?= htmlspecialchars($tn) ?></strong>.</p>
<?php endif; ?>
<p><a href="tracking.php">Track another</a></p>
<?php endif; ?>
</body>
</html>
