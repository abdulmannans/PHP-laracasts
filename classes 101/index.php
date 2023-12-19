<?php

class Task{
    public $title;
    public $description;
    public $completed = false;

    public function __construct($title, $desciption)
    {
        $this->title = $title;
        $this->description = $desciption;

    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Shopping', 'Go to mall'),
    new Task('Watch PHP Videos', 'Complete My Screencast PHP Videos'),
    new Task('Cleaning','Clean My Room And Setup My House')
];
// echo "<pre>";
// var_dump($task);
// echo "</pre>";

$tasks[0]->complete();

require 'index-view.php';

?>