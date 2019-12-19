<?php

    require_once __DIR__ . "/classConectar.php";

    $id = $_GET['id'];
    $data = Conectar::delete($id);
?>