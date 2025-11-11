<?php
session_start();
$admin_pass = getenv('ADMIN_PASS') ?: 'changeme';
if (!isset($_SESSION['admin_logged_in'])) {
    die('Unauthorized');
}

include __DIR__ . '/includes/db_connect.php';

$id = $_POST['id'] ?? '';
$status = $_POST['status'] ?? '';

if ($id && $status) {
    $stmt = $db->prepare("UPDATE tracking SET status=:status WHERE id=:id");
    $stmt->execute([':status'=>$status, ':id'=>$id]);
}

header('Location: admin.php');
exit;
