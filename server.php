<?php

$stringa = file_get_contents('todo-list.json');
$todo_List = json_decode($stringa, true);





header('Content-Type: application/json');
echo json_encode($todo_List);
