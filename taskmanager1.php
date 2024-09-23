<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="task-container">
        <h1>Task Manager</h1>
        <div class="task-input">
            <input type="text" id="taskInput" placeholder="Enter a new task">
            <button id="addTaskBtn">Add Task</button>
        </div>
        <div class="task-list">
            <h2>Task List:</h2>
            <ul id="taskList">
                <li>task 1</li>
                <li>task 2</li>
            </ul>
        </div>
        <button id="clearBtn">Clear All Tasks</button>
    </div>
</body>
</html>