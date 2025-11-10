<?php
// admin.php - simple admin dashboard for tracking records
// Set an environment variable ADMIN_PASS on Render (see instructions below).
include __DIR__ . '/includes/netlib.php';
include __DIR__ . '/includes/db_connect.php';

$admin_pass = getenv('ADMIN_PASS') ?: 'changeme';

// Basic auth-like password form
session_start();
if (!isset($_SESSION['admin_ok'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['admin_pass'])) {
        if (hash_equals($admin_pass, $_POST['admin_pass'])) {
            $_SESSION['admin_ok'] = true;
        } else {
            $err = "Invalid password.";
        }
    } else {
        // show login form
        ?>
        <!doctype html><html lang="en"><head><meta charset="utf-8"><title>Admin Login</title></head><body>
        <h1>Admin Login</h1>
        <?php if (!empty($err)) echo "<p style='color:red;'>".htmlspecialchars($err)."</p>"; ?>
        <form method="post" action="admin.php">
            <label>Password: <input type="password" name="admin_pass" /></label>
            <button type="submit">Enter</button>
        </form>
        </body></html>
        <?php
        exit;
    }
}

// At this point admin is authenticated
// Handle updates
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'update') {
    $id = intval($_POST['id'] ?? 0);
    $status = trim($_POST['status'] ?? '');
    $notes = trim($_POST['notes'] ?? '');
    if ($id > 0) {
        $upd = $db->prepare("UPDATE tracking SET status = :status, notes = :notes WHERE id = :id");
        $upd->execute([':status' => $status, ':notes' => $notes, ':id' => $id]);
    }
}

// Fetch latest 200 records (adjust as needed)
$stmt = $db->query("SELECT * FROM tracking ORDER BY created_at DESC LIMIT 200");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><title>Admin Dashboard</title></head>
<body>
  <h1>Admin Dashboard — Shipments</h1>
  <p><a href="tracking.php">Public tracking lookup</a> | <a href="admin.php?logout=1">Logout</a></p>

  <?php if (empty($rows)): ?>
    <p>No shipments found.</p>
  <?php else: ?>
    <table border="1" cellpadding="6" cellspacing="0">
      <thead><tr><th>ID</th><th>Tracking #</th><th>Customer</th><th>Origin</th><th>Destination</th><th>Status</th><th>Created</th><th>Action</th></tr></thead>
      <tbody>
      <?php foreach ($rows as $r): ?>
        <tr>
          <td><?php echo (int)$r['id']; ?></td>
          <td><?php echo htmlspecialchars($r['tracking_number']); ?></td>
          <td><?php echo htmlspecialchars($r['customer_name']); ?></td>
          <td><?php echo htmlspecialchars($r['origin']); ?></td>
          <td><?php echo htmlspecialchars($r['destination']); ?></td>
          <td><?php echo htmlspecialchars($r['status']); ?></td>
          <td><?php echo htmlspecialchars($r['created_at']); ?></td>
          <td>
            <form method="post" action="admin.php" style="margin:0;">
              <input type="hidden" name="action" value="update">
              <input type="hidden" name="id" value="<?php echo (int)$r['id']; ?>">
              <input name="status" value="<?php echo htmlspecialchars($r['status']); ?>" style="width:120px;">
              <input name="notes" value="<?php echo htmlspecialchars($r['notes']); ?>" style="width:200px;">
              <button type="submit">Save</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</body>
</html>

<?php
// Logout support
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: admin.php");
    exit;
}
