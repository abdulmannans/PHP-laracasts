<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" type="text/css" href="./public/css/style.css">
</head>
<body>
    <?php require('partials/nav.php')?>
    <h1>My Tasks</h1>
    <ol>
        <?php foreach($tasks as $task) : ?>
            <li>
                <?php if($task->completed) : ?>
                   <strike><?= $task->title; ?></strike> 
                <?php else :?>
                    <?= $task->title; ?>
                <?php endif; ?>
                <ul>
                   <li>
                   <?php if($task->completed) : ?>
                       <Strike> <?= $task->description ?></Strike>
                   <?php else :?>
                        <?= $task->description ?>   
                   <?php endif; ?>  
                   </li>
                </ul>
            </li>
            <br>
        <?php endforeach; ?>
    </ol>
</body>
</html>