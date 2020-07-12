<?php 
echo "<h4 style='text-align:center;'> Difference between Abstraction and Interface</h4>";
echo "<table border = '1'>
        <tr><td width='2%' style='font-weight:bold;'>S.no</td><td width='20%' style='font-weight:bold;'>Abstraction</td><td width='20%' style='font-weight:bold;'>Interface</td></tr>
        <tr><td>1</td><td width='1%'>Abstraction does not support multiple inheritance</td><td width='1%'>Interface support multiple inheritance</td></tr>
		<tr><td>2</td><td width='1%'>Abstraction contain data member</td><td width='1%'>Interface does not contain data member</td></tr>
		<tr><td>3</td><td width='1%'>Abstraction contain constructor</td><td width='1%'>Interface does not contain constructor</td></tr>
		<tr><td>4</td><td width='1%'>Abstraction contain complete and incomplete member</td><td width='1%'>Interface contain only incomplete member</td></tr>
		<tr><td>5</td><td width='1%'>Abstraction can contain access modifiers</td><td width='1%'>An Interface can not have access modifiers by default everything assumed as public</td></tr>
		<tr><td>6</td><td width='1%'>Only complete member of Abstraction can be Static</td><td width='1%'>Member of Interface can not be static.</td></tr>
</table>
";
echo "<h4 style='text-align:center;'>Abstraction Program Section will start Here.</h4>";

abstract class Baseemployee
{
	protected $firstname;
	protected $lastname;
	
	public function getfullname()
	{
		return $this->firstname. ' ' .$this->lastname."</br>";
	}
	public abstract function getmonthluslry($slry);
	public function __construct($f, $l)
	{
		$this->firstname = $f;
		$this->lastname = $l;
		
	}
}

class Fulltimeemployee extends Baseemployee{
//	protected $firstname;
//	protected $lastname;
	protected $annulsalry;
	
//	public function getfullname()
//	{
//		return $this->firstname. ' ' .$this->lastname."</br>";
//	}
	 
	public function getmonthlyslry($slry)
	{
		return $this->annulsalry/12;
	}
	
//	public function __construct($f, $l)
//	{
//		$this->firstname = $f;
//		$this->lastname = $l;
//		
//	}
}

class contractemployee extends Baseemployee
{
//	protected $firstname;
//	protected $lastname;
	protected $hourlyrate;
	protected $totalhour;
	
//	public function getfullname()
//	{
//		return $this->firstname.' '.$this->lastname;
//	}
//	
	public function getmonthlysalary()
	{
		return $this->hourlyrate * $this->totalhour;
	}
	
//	public function __construct($f, $l)
//	{
//		$this->firstname = $f;
//		$this->lastname = $l;
//	}
}
$fulltime = new Fulltimeemployee('Fulltime', 'Employee');

echo $fulltime->getfullname();
echo $fulltime->getmonthluslry('500');

$contract = new contractemployee('Contact', 'Employee');

echo $contract->getfullname();
//echo $contract->getmonthluslry(500);

//$baseobj = new Baseemployee('Himanshu', 'Kumar'); //Direct object Of abstract class is not possible

?>