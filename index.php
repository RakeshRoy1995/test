<?php


class school {
	public $names;
	public $attendence;
	public $mark;

	public function hello($name,$attendence,$mark)
	{
		$this->names = $name;
		$this->attendence = $attendence;
		$this->mark =$mark;
	}

}

$obj = new school();
$obj->hello('rakesh 10', true, 70);

echo $obj->mark;
?>
