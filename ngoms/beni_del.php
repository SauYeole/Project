<?php 
include 'include/conn.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM add_beni WHERE don_id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: beni_list.php");
    exit;
} else {
    echo "Failed: " . $stmt->error;
}

$stmt->close();
?>
