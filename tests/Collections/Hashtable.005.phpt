<?php

/**
 * Test: Nette\Collections\Hashtable::__construct()
 *
 * @author     David Grudl
 * @category   Nette
 * @package    Nette\Collections
 * @subpackage UnitTests
 */

use Nette\Collections\Hashtable;



require __DIR__ . '/../initialize.php';

require __DIR__ . '/Collections.inc';



$arr = array(
	'a' => new Person('Jack'),
	'b' => new Person('Mary'),
	'c' => new ArrayObject(),
);

try {
	T::note("Construct from array");
	$hashtable = new Hashtable($arr, 'Person');
} catch (Exception $e) {
	T::dump( $e );
}

T::note("Construct from array II.");
$hashtable = new Hashtable($arr);
T::dump( $hashtable );



__halt_compiler() ?>

------EXPECT------
Construct from array

Exception InvalidArgumentException: Item must be 'Person' object.

Construct from array II.

object(%ns%Hashtable) (3) {
	"a" => object(Person) (1) {
		"name" private => string(4) "Jack"
	}
	"b" => object(Person) (1) {
		"name" private => string(4) "Mary"
	}
	"c" => object(ArrayObject) (0) {}
}
