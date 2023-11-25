<?php

$new_task_text = $_POST['task'] ?? '';
$new_task = [
    "text" => $new_task_text,
    "done" => false
];

$index_delete = $_POST['deleteindex'] ?? '';


$response = [
    'success' => true,
];
    if ($new_task) {
    $tasks_string = file_get_contents('./todos.json');

    $tasks = json_decode($tasks_string, true);
        // var_dump($tasks);


    $tasks[] = $new_task;

    $response['tasks'] = $tasks;

    $tasks_string = json_encode($tasks);
    file_put_contents('./todos.json', $tasks_string);
    } else {
        $response['success'] = false;
    }

    header('Content-type: application/json'); 
    echo json_encode($response);
    var_dump($index_delete);