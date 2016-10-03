<?php
namespace jlttt\tests\units;
use mageekguy\atoum;
var_dump(file_exists(__DIR__ . '/../../src/Test.php'));
require_once(dirname(dirname(__DIR__)) . '/src/Test.php');

class Test extends atoum
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
}

?>
