<?php
$servername = "localhost"; //endereço do servidor de banco de dados
$username = "root"; //nome do usuario do banco de dados
$password = ""; //senha do banco de dados
$database = "dbreceitas"; //nome do banco de dados
try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<script>console.log('conectado com sucesso')</script>";
} catch (PDOException $e) {
  echo "<script>console.error('Connection failed:" . $e->getMessage() . "')</script>";
}
