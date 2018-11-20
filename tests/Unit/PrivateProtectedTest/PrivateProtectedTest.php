<?php
	/**
	 * 
	 */
	use PHPUnit\FrameWork\TestCase;
	class PrivateProtectedTest extends TestCase
	{
		public function testSubtract()
		{
		    $subtract = new ReflectionMethod('SampleCommand', 'subtract');
		    $subtract->setAccessible(true);
		 
		    $this->assertEquals(4, $subtract->invoke(new SampleCommand, 7, 3));
		}
	}
?>