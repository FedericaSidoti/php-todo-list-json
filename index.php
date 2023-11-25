<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP To Do List</title>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- il mio css -->
    <link rel="stylesheet" href="./css/app.css">
</head>
<body>
    <div id="app">
        <header class="header p-2 mb-3">
            <h1 class="text-center"> la Lista</h1>
        </header>
        <main>
        <section class="form-section">
        <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center">
                    <input type='text' placeholder='Aggiungi task' v-model="newTask">
                    <button type='submit' @click="saveTasks"> Aggiungi </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="list-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6"> 
                        <table class="table table-primary table-striped">
                            <thead>
                                <th scope="col" class="col-10">Task</th>
                                <th scope="col" class="col-2 text-center">Elimina</th>
                            </thead>
                            <tbody>
                                <tr v-for="(task, i) in tasks" :key="i">
                                    <td>{{ task.text}}</td>
                                    <td class="text-center original-btn">&#10005;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        </main>
        
    </div>
    <!-- il mio js -->
    <script src="./app.js"> </script>
</body>
</html>