<?php

$index_toggle = $_POST['ind'] ?? '';

$response = [
    'success' => true,
];
    if ($index_delete) {
    $tasks_string = file_get_contents('./todos.json');

    $tasks = json_decode($tasks_string, true);
        // var_dump($tasks);

    $currentTask= $tasks[$index_toggle];

    $response['tasks'] = $tasks;

    $tasks_string = json_encode($tasks);
    file_put_contents('./todos.json', $tasks_string);
    } else {
        $response['success'] = false;
    }

    header('Content-type: application/json'); 
    echo json_encode($response);
    // var_dump($index_delete);