<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP To Do List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id='app'>
        <header>
            <h1> la Lista</h1>
        </header>
        <input type='text' placeholder='Aggiungi task' v-model='newTask'>
        <button type='submit'> Aggiungi </button>
    </div>
</body>
</html>