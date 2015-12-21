//This lesson looked at Object Orientated Programming, We created a class called Task 

<?php 

class Task {
	public $description;
	public $title;

	public $completed = false;

	public function __construct($title, $description)
	{
		$this->title = $title;
		$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}
}

$task = new Task("Learn OOP", "Once You Know OOP In One Languages, You Can Pick Up Another Language With Ease");

$task->complete();

var_dump($task->description, $task->title);
var_dump($task->completed);

