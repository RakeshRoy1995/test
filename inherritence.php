<?php 

class university{
  public $name;
	public function number ($value)
	{
		$this->name=$value;
	}

}

class student extends university{

	public function studentes()
	{
		echo 'we have students of ';
	}
}

class teacher extends university{
	public function teachers()
	{
		echo 'we have teachers of';
	}
}

$obj = new student();
$obj->number(100);
echo $obj->studentes()." ".$obj->name;


?>