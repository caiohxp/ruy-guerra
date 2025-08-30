<?php
$mysqli = new mysqli('127.0.0.1', 'ruyguer_persona', 'ca62la63', 'ruyguer_gueruyrra');

// Força charset correto
if (!$mysqli->set_charset("latin1")) {
    echo "Erro ao definir charset: " . $mysqli->error;
}

// Verifica erro de conexão
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
?>
