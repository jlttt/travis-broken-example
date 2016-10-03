<?php
namespace jlttt\tests\units;
use mageekguy\atoum;
require_once(dirname(dirname(__DIR__)) . '/Test.php');

class Test extends atoum
{
	public function testOnePlusOne() {
		$this
            ->given($this->newTestedInstance)
            ->then
                    ->boolean($this->testedInstance->onePlusOne())
                        ->isEqualTo(true);
  	}
}
?>
