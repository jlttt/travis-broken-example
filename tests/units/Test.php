<?php
namespace jlttt\tests\units;
use mageekguy\atoum;
include(__DIR__ . '/../../src/Test.php');

class Test extends atoum
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
}

?>
