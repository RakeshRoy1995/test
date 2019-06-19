<?php

/**
 * summary
 */
class Bill
{
	  public $dnnr_cost = 20;
	  public $bill;

	  public function __construct()
	  {
	  	$this->bill = 5;
	  }
	  //construct all call himself first at biginning

    public function restaurent($person)
    {
        $this->bill +=$this->dnnr_cost*$person;
        return $this;
    }

    public function __destruct()
	  {
	  	echo $this->bill;
	  }
	  //this call itself at last of end
}

$obj = new Bill();

$obj->restaurent(10)->bill;

?>