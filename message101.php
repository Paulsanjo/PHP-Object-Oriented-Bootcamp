<?php 

class Person
{
	protected $name;

	function __construct($name)
	{
		$this->name = $name;
	}
}

class Business
{
	protected $staff;

	public function __construct(Staff $staff){
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	}
}

class Staff
{
	protected $members = [];

	public function add(Person $person)
	{
		$this->members[] = $person;
	}
}

$suchi = new Person('Thouhedul Islam');

$staff = new Staff;

$sclrship = new Business($staff);

$sclrship->hire($suchi);

var_dump($staff);