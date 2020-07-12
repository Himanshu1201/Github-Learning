<?php
abstract class Animal
{
	public $name;
	public $age;
	
	
	public function Describe()
	{
		return $this->name.''.$this->age.'Year Old';
	}
	
	abstract public function greet();
}


class Dog extends Animal{
	public function greet()
	{
		return "Woof";
	}
	public function Describe()
	{
		return parent::Describe()." and I am a Dog";
	}
}

$Dogobj = new Dog();
$Dogobj->name="Seru";
$Dogobj->age="10";

echo $Dogobj->Describe();
echo $Dogobj->greet();
?>
