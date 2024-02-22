<?php
require_once '../../Model/cliente.php';
require_once '../../Controller/clienteController.php';
require_once '../../Common/Database.php';

$db = new Database();
$conn = $db->getConnection();

// Uso del modelo y controlador
$clienteModel = new ClienteModel($conn);
$clienteController = new ClienteController($clienteModel);
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $clienteController->getAll();
}
?>