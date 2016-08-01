<?php
  require_once __DIR__ . '/../../config.php';
  require_once __DIR__ . '/services.php';

  $result = new stdClass;
  $result->success = false;
  $errors = array();
  $log = new \Log\LogWrapper('Presupuestos');

  

  $action = isset($_REQUEST["a"]) ? $_REQUEST["a"] : null;
  $body = isset($_REQUEST["data"]) ? $_REQUEST["data"] : null;
  switch ($action) {
    case 'create':
      $data = json_decode($body);
      $customer = $data->customer;
      $items = $data->items;
      $rollers = Array();
      foreach ($items as $item) {
        if($item->type == "ROLLER")
        {
          array_push($rollers, $item->data);
        }
      }
      break;
?>