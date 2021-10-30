<?php

require 'Task.php';

require 'function.php';

$pdo = connect();

$tasks = fetchAllData($pdo);

require 'index-view.php';
?>