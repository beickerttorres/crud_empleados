<?php include 'db.php';
$id = $_GET['id'];
$db->exec("DELETE FROM empleados WHERE id = $id");
header("Location: index.php");
?>
