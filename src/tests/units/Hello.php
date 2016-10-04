<?php
namespace Vendor\Project\tests\units;

require_once(__DIR__ . '/../../../vendor/autoload.php');

use atoum;

class Hello extends atoum
{
	public function testOnePlusOne() {
		$this
            ->given($this->newTestedInstance)
            ->then
                    ->boolean($this->testedInstance->onePlusOne())
                        ->isEqualTo(true);
  	}
}
