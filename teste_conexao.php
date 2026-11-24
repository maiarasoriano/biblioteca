<?php
// --- Configurações do banco de dados ---
// Altere essas variáveis conforme o seu ambiente
$servername = "localhost";       // Endereço do servidor MySQL (geralmente localhost)
$username   = "root";           // Usuário do MySQL
$password   = "Senai@118";      // Senha do MySQL
$dbname     = "sistema_musical_v2"; // Nome do banco de dados

include('conexao.php');
echo "Conectado com sucesso ao banco: " . $dbname;