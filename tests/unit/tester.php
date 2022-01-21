<?php	
	namespace foo;
	
	class bar {
		}
	
		echo bar::class. "</br>"; // foo\bar


	class MyClass
	{
	  const CONSTANT = 'valeur constante';
	
	  function showConstant() {
		echo  self::CONSTANT . "</br>";
	  }
	}
	
	echo \foo\MyClass::CONSTANT. "</br>";
	
	$classname = "MyClass";
	//echo \foo\$classname::CONSTANT . "</br>";
	
	$class = new \foo\MyClass();
	$class->showConstant();
	
	echo $class::CONSTANT. "</br>";

?>