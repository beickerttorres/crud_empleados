<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php include 'db.php'; ?>
<h1>Lista de Empleados</h1>
<a href="create.php">Agregar nuevo</a>
<table border="1">
<tr><th>ID</th><th>Nombre</th><th>Cargo</th><th>Salario</th><th>Acciones</th></tr>
<?php
$result = $db->query("SELECT * FROM empleados");
while ($row = $result->fetchArray()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['cargo']}</td>
        <td>{$row['salario']}</td>
        <td>
            <a href='view.php?id={$row['id']}'>Ver</a> |
            <a href='edit.php?id={$row['id']}'>Editar</a> |
            <a href='delete.php?id={$row['id']}'>Eliminar</a>
        </td>
    </tr>";
}
?>
</table>
