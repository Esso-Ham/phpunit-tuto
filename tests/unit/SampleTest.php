<?php
	
	/*
		https://phpunit.readthedocs.io/en/9.5/index.html

		************************

		Martin Fowler said:

		"Whenever you are tempted to type something into a print statement or a debugger expression, write it as a test instead".

		fr ==> "A chaque fois que vous avez la tentation de saisir quelque chose dans une instruction print ou dans une expression de débogage, écrivez le plutôt dans un test."]

		Ref=>https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html

		************************
		Adrian Kuhn et. al.:

		"Unit Tests are primarily written as a good practice to help developers identify and fix bugs, to refactor code and to serve as documentation for a unit of software under test. To achieve these benefits, unit tests ideally should cover all the possible paths in a program. One unit test usually covers one specific path in one function or method. However a test method is not necessarily an encapsulated, independent entity. Often there are implicit dependencies between test methods, hidden in the implementation scenario of a test".

		fr ==> "Les tests unitaires sont principalement écrits comme une bonne pratique pour aider les développeurs à identifier et à corriger les bogues, à refactoriser le code et à servir de documentation pour une unité de logiciel en cours de test. Pour obtenir ces avantages, les tests unitaires devraient idéalement couvrir tous les chemins possibles dans un programme. Un test unitaire couvre généralement un chemin spécifique dans une fonction ou une méthode. Cependant, une méthode d'essai n'est pas nécessairement une entité encapsulée et indépendante. Il existe souvent des dépendances implicites entre les méthodes de test, cachées dans le scénario de mise en œuvre d'un test"

		Ref=>https://phpunit.readthedocs.io/en/9.5/writing-tests-for-phpunit.html
		*************************
	*/

	declare(strict_types=1);

	// 1) ClassTest inherits (most of the time) from PHPUnit\Framework\TestCase.
	use PHPUnit\Framework\TestCase;
	use App\Functions\CsvFileIterator;
	
	// 2) The tests for a class Class go into a class ClassTest.
	class SampleTest extends TestCase {		
		
		/*
			https://phpunit.readthedocs.io/en/9.5/fixtures.html

			PHPUnit supports sharing the setup code. Before a test method is run, a template method called setUp() is invoked. setUp() is where you create the objects against which you will test. Once the test method has finished running, whether it succeeded or failed, another template method called tearDown() is invoked. tearDown() is where you clean up the objects against which you tested.

			The setUp() and tearDown() template methods are run once for each test method (and on fresh instances) of the test case class.

			In addition, the setUpBeforeClass() and tearDownAfterClass() template methods are called before the first test of the test case class is run and after the last test of the test case class is run, respectively.

			If you create many objects in your setUp(), you may want to unset() the variables holding those objects in your tearDown() so that they can be garbage collected sooner. Objects created within setUp() are only automatically garbage collected at the end of the PHP process that runs PHPUnit.

			There are few good reasons to share fixtures between tests, but in most cases the need to share a fixture between tests stems from an unresolved design problem.

			A good example of a fixture that makes sense to share across several tests is a database connection: you log into the database once and reuse the database connection instead of creating a new connection for each test. This makes your tests run faster.

			Use the setUpBeforeClass() and tearDownAfterClass() template methods to connect to the database before the test case class’ first test and to disconnect from the database after the last test of the test case, respectively.
		*/
		protected $var;

		protected function setUp(): void
		{
			//var_dump('setUp');
			$this->var = true;
		}

		/*
			3) The tests are public methods that are named test*.
			
			4) Inside the test methods, assertion methods such as assertSame() (see Assertions) are used to assert that an actual value matches an expected value.
		*/
		public function testSample()
		{
			$this->assertTrue($this->var);
		}

		// 5) Alternatively, you can use the @test annotation in a method’s docblock to mark it as a test method.
		/**
		 * @test
		*/
		public function sample()
		{
			$this->assertTrue($this->var);
		}	

	    /*
	    	6) PHPUnit prend en charge la déclaration de dépendances explicites entre les méthodes de test. De telles dépendances ne définissent pas l'ordre dans lequel les méthodes de test doivent être exécutées, mais elles permettent le retour d'une instance de l'appareil de test par un producteur et sa transmission aux consommateurs dépendants.
	    */
	    public function testEmpty(): array
	    {
	        $stack = [];
	        $this->assertEmpty($stack);

	        return $stack;
	    }

	    /**
	     * @depends testEmpty
	     */
	    public function testPush(array $stack): array
	    {
	        array_push($stack, 'foo');
	        $this->assertSame('foo', $stack[count($stack)-1]);
	        $this->assertNotEmpty($stack);

	        return $stack;
	    }

	    /**
	     * @depends testPush
	     */
	    public function testPop(array $stack): void
	    {
	        $this->assertSame('foo', array_pop($stack));
	        $this->assertEmpty($stack);
	    }

	    /*
	    	Utiliser un fournisseur de données qui renvoie un objet Iterator
	    */
		/**
	     * //@dataProvider additionProvider1
	    */
	    public function testAdd1($a, $b, $expected): void
	    {
	        $this->assertSame(intval($expected), intval($a) + intval($b));
	    }

	    public function additionProvider1(): CsvFileIterator
	    {
	       return new CsvFileIterator(dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'data.csv');
	    }

	    /*
	    	Un test qui a plusieurs annotations @depends prendra une fixture du premier producteur en premier argument, une fixture du second producteur en second argument, et ainsi de suite.
	    */
	    public function testProducerFirst()
	    {
	        $this->assertTrue(true);
	        return 'first';
	    }

	    public function testProducerSecond()
	    {
	        $this->assertTrue(true);
	        return 'second';
	    }

	    /**
	     * @depends testProducerFirst
	     * @depends testProducerSecond
	     */
	    public function testConsumer($a, $b)
	    {
	        $this->assertSame('first', $a);
	        $this->assertSame('second', $b);
	    }

	    /*
	    
	    	Une méthode de test peut recevoir des arguments arbitraires. Ces arguments doivent être fournis par une ou plusieurs méthodes fournisseuses de données additionProvider(). La méthode fournisseuse de données à utiliser est indiquée dans l’annotation @dataProvider.

			Une méthode fournisseuse de données doit être public et retourne, soit un tableau de tableaux, soit un objet qui implémente l’interface Iterator et renvoie un tableau pour chaque itération. Pour chaque tableau qui est une partie de l’ensemble, la méthode de test sera appelée avec comme arguments le contenu du tableau.
		*/
		/**
     	 * @dataProvider additionProvider2
     	*/
	    public function testAdd2($a, $b, $expected)
	    {
	        $this->assertSame($expected, $a + $b);
	    }

	    public function additionProvider2()
	    {
	        return [
	            [0, 0, 0],
	            [0, 1, 1],
	            [1, 0, 1],
	            [1, 1, 2]
	        ];
	    }

	    /*
	    	Lorsque vous utilisez un grand nombre de jeux de données, il est utile de nommer chacun avec une clé en chaine de caractère au lieu de la valeur numérique par défaut. La sortie sera plus verbeuse car elle contiendra le nom du jeu de données qui casse un test.
	    */
	    /**
     	 * @dataProvider additionProvider3
     	*/
    	public function testAdd3($a, $b, $expected)
	    {
	        $this->assertSame($expected, $a + $b);
	    }

	    public function additionProvider3()
	    {
	        return [
	            'adding zeros'  => [0, 0, 0],
	            'zero plus one' => [0, 1, 1],
	            'one plus zero' => [1, 0, 1],
	            'one plus one'  => [1, 1, 2]
	        ];
	    }
	}

?>