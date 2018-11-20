<?php
/**
 * 
 */
use PHPUnit\FrameWork\TestCase;
class SkippedTest extends TestCase
{
	
	/**
	*@requires PHPUnit 4.8
	*/
	function testSkippedExample()
	{
		# code...
		     // $this->markTestSkipped('this test is skipped');
		$this->assertTrue(true);

	}
}
?>