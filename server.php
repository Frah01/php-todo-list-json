<?php

$stringa = file_get_contents('todo-list.json');
$todoList = json_decode($stringa, true);
var_dump($todoList);
header('Content-Type: application/json');
echo json_encode($todoList);
