<?php

class user{
	public $name="Rakesh";
	protected $email= "Rakesh@gmail.com";
	private $password="123456";
  
  //to access protected data
  public function __construct()
    {
       echo $this->email;
    }
  //to access private data
  public function private_data(){
  	return $this->password;
  }  

}


$obj = new user();
echo $obj->private_data();

?>