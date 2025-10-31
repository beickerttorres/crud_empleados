<?php include 'db.php';
$id = $_GET['id'];
$row = $db->query("SELECT * FROM empleados WHERE id = $id")->fetchArray();

if ($_POST) {
    $db->exec("UPDATE empleados SET 
        nombre = '{$_POST['nombre']}', 
        cargo = '{$_POST['cargo']}', 
        salario = {$_POST['salario']} 
        WHERE id = $id");
    header("Location: index.php");
}
?>
<h1>Editar Empleado</h1>
<form method="post">
    Nombre: <input name="nombre" value="<?= $row['nombre'] ?>"><br>
    Cargo: <input name="cargo" value="<?= $row['cargo'] ?>"><br>
    Salario: <input name="salario" type="number" step="0.01" value="<?= $row['salario'] ?>"><br>
    <button type="submit">Actualizar</button>
</form>
