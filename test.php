<?
require 'garden/func.php';
class testGarden
{
	
	public function testApple()
    {
		$garden = new Garden();
		$garden->addTree('apple', rand(100, 500));
		$garden->collectFruits();
		$garden->countWeight();
	}
	public function testPear()
    {
		$garden = new Garden();
		$garden->addTree('pear', rand(100, 500));
		$garden->collectFruits();
		$garden->countWeight();
	}
	public function testAll()
    {
		$garden = new Garden();
		$garden->addTree('pear', rand(100, 500));
		$garden->addTree('apple', rand(100, 500));
		$garden->collectFruits();
		$garden->countWeight();
	}
}
$tester = new testGarden();
$tester->testApple();
$tester->testPear();
$tester->testAll();

?>