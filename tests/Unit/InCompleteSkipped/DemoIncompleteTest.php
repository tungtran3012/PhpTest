<?php
/**
 * 
 */
use PHPUnit\FrameWork\TestCase;
class DemoIncompleteTest extends TestCase
{
	
	function testSomething()
	{
		# code...
		$this->assertEquals(2+2,4);
		$this->markTestIncomplete('this test is incomplete');
		
	}
}

?>