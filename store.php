<?php

$new_task = $_POST['task'] ?? '';

$response = [
    'success' => true,
];

    $tasks_string = file_get_contents('./todos.json');

    $tasks = json_decode($tasks_string, true);
        var_dump($tasks);


    $tasks[] = $new_task;
  
    $response['tasks'] = $tasks;
  
    $tasks_string = json_encode($task);
    file_put_contents('./todos.json', $tasks_string);

  header('Content-type: application/json'); ?>

  <?php
  echo json_encode($response);
  var_dump($response);