<?php
include __DIR__ . '/includes/db_connect.php';

$tn = trim($_POST['tracking_number'] ?? ($_GET['tracking_number'] ?? ''));

?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Track Shipment</title></head>
<body>
<h1>Track your shipment</h1>

<?php if ($tn === ''): ?>
<form method="post" action="tracking.php">
  <label for="tracking_number">Tracking Number:</label>
  <input id="tracking_number" name="tracking_number" type="text" value="">
  <button type="submit">Search</button>
</form>
<?php else: ?>
<?php
$stmt = $db->prepare("SELECT * FROM tracking WHERE tracking_number = :t LIMIT 1");
$stmt->execute([':t'=>$tn]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row):
?>
<h2>Tracking: <?=htmlspecialchars($row['tracking_number'])?></h2>
<ul>
<li>Status: <strong><?=htmlspecialchars($row['status'])?></strong></li>
<li>Service: <?=htmlspecialchars($row['service'])?></li>
<li>Package Content: <?=htmlspecialchars($row['package_content'])?></li>
<li>Package Weight: <?=htmlspecialchars($row['package_weight'])?></li>
<li>Declared Value: <?=htmlspecialchars($row['declared_value'])?></li>
<li>Additional Services: <?=htmlspecialchars($row['additional_services'])?></li>
<li>Third Party Account: <?=htmlspecialchars($row['third_party_account'])?></li>
<li>Sent on: <?=htmlspecialchars($row['created_at'])?></li>
</ul>

<h3>Sender</h3>
<p>Name: <?=htmlspecialchars($row['sender_name'])?><br>
Address: <?=htmlspecialchars($row['sender_address'])?><br>
City: <?=htmlspecialchars($row['sender_city'])?><br>
County: <?=htmlspecialchars($row['sender_county'])?><br>
Country: <?=htmlspecialchars($row['sender_country'])?><br>
Zip: <?=htmlspecialchars($row['sender_zip'])?></p>

<h3>Receiver</h3>
<p>Name: <?=htmlspecialchars($row['receiver_name'])?><br>
Address: <?=htmlspecialchars($row['receiver_address'])?><br>
City: <?=htmlspecialchars($row['receiver_city'])?><br>
County: <?=htmlspecialchars($row['receiver_county'])?><br>
Country: <?=htmlspecialchars($row['receiver_country'])?><br>
Zip: <?=htmlspecialchars($row['receiver_zip'])?></p>

<p><a href="tracking.php">Check another</a></p>
<?php else: ?>
<p>No record found for <strong><?=htmlspecialchars($tn)?></strong>. Please try again.</p>
<p><a href="tracking.php">Back</a></p>
<?php endif; ?>
<?php endif; ?>
</body>
</html>
