<?php require_once('../init.php'); 

$id = $_GET['id'];

Database::getInstance()->delete('article', ['id', '=', $id]);


header("Location: /test-solutions/admin/index.php");

?>