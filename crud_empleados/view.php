<?php include 'db.php';
$id = $_GET['id'];
$row = $db->query("SELECT * FROM empleados WHERE id = $id")->fetchArray();
?>
<h1>Detalles del Empleado</h1>
<p><strong>Nombre:</strong> <?= $row['nombre'] ?></p>
<p><strong>Cargo:</strong> <?= $row['cargo'] ?></p>
<p><strong>Salario:</strong> $<?= $row['salario'] ?></p>
<a href="index.php">Volver</a>
