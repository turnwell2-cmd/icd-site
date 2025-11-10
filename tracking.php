<?php
// tracking.php - look up a tracking number
include __DIR__ . '/includes/netlib.php';
include __DIR__ . '/includes/db_connect.php';

$tn = trim($_POST['tracking_number'] ?? ($_GET['tracking_number'] ?? ''));

?>
<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><title>Tracking Lookup</title></head>
<body>
  <h1>Track your shipment</h1>

<?php
if ($tn === '') {
    // show a simple lookup form
    ?>
    <form method="post" action="tracking.php">
      <label for="tracking_number">Tracking number</label>
      <input id="tracking_number" name="tracking_number" type="text" value="">
      <button type="submit">Search</button>
    </form>
    <?php
} else {
    // Lookup in DB
    $stmt = $db->prepare("SELECT * FROM tracking WHERE tracking_number = :t LIMIT 1");
    $stmt->execute([':t' => $tn]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo "<h2>Tracking: " . htmlspecialchars($row['tracking_number']) . "</h2>";
        echo "<p>Status: <strong>" . htmlspecialchars($row['status']) . "</strong></p>";
        echo "<p>From: " . htmlspecialchars($row['origin']) . " — To: " . htmlspecialchars($row['destination']) . "</p>";
        if (!empty($row['customer_name'])) {
            echo "<p>Customer: " . htmlspecialchars($row['customer_name']) . "</p>";
        }
        if (!empty($row['notes'])) {
            echo "<p>Notes: " . nl2br(htmlspecialchars($row['notes'])) . "</p>";
        }
        echo "<p>Created: " . htmlspecialchars($row['created_at']) . "</p>";
    } else {
        echo "<p>No scan record for the tracking number <strong>" . htmlspecialchars($tn) . "</strong>. Please try again later.</p>";
    }

    echo '<p><a href="tracking.php">Check another</a></p>';
}
?>
</body>
</html>
