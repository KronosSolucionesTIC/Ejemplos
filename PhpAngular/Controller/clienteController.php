<?php
class ClienteController {
  private $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function getAll() {
    $rows = $this->model->getAll();
    header('Content-Type: application/json');
    echo json_encode($rows);
  }
}
?>