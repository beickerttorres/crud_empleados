<?php include 'db.php';
if ($_POST) {
    $db->exec("INSERT INTO empleados (nombre, cargo, salario) VALUES (
        '{$_POST['nombre']}', '{$_POST['cargo']}', {$_POST['salario']}
    )");
    header("Location: index.php");
}
?>
<h1>Nuevo Empleado</h1>
<form method="post">
    Nombre: <input name="nombre"><br>
    Cargo: <input name="cargo"><br>
    Salario: <input name="salario" type="number" step="0.01"><br>
    <button type="submit">Guardar</button>
</form>
