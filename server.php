<?php

$stringa = file_get_contents('todo-list.json');
$todo_List = json_decode($stringa, true);


if (isset($_POST['todoLang'])) {
    $todo_lang = $_POST['todoLang'];
    $todo_array = [
        "language" => $todo_lang,
        "flag" => false
    ];
    $todo_List[] = $todo_array;
    file_put_contents('todo-list.json', json_encode($todo_List));
}

if (isset($_POST['delete'])) {
    unset($todo_List[$_POST['delete']]);
    file_put_contents('todo-list.json', json_encode($todo_List, JSON_PRETTY_PRINT));
}




header('Content-Type: application/json');
echo json_encode($todo_List);
