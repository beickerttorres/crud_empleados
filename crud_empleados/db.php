<?php
$db = new SQLite3('empresa.db');
$db->exec("CREATE TABLE IF NOT EXISTS empresa (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    cargo TEXT,
    salario REAL
)");
?>
