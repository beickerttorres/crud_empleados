<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$db = new SQLite3('empresa.db');
$result = $db->exec("INSERT INTO empleados (nombre, cargo, salario) VALUES ('Carlos', 'Analista', 2800000)");

if ($result) {
    echo "✅ Registro insertado correctamente.";
} else {
    echo "❌ Error al insertar.";
}
?>
