<?php
	/**
	 * 
	 */
	use PHPUnit\FrameWork\TestCase;
	class SetUpTearDownTest extends TestCase
	{
		protected $stack;
		public function setUp()
		{
			# code...
			$this->stack=array();
		}
		public function testEmpty()
		{
			# code...
			$this->assertTrue(empty($this->stack));
		}
		public function testPush()
		{
			# code...
			array_push($this->stack, 'foo');
			$this->assertEquals('foo',$this->stack[count($this->stack)-1]);
			$this->assertFalse(empty($this->stack));
		}
		public function testPop()
		{
			array_push($this->stack, 'foo');
			$this->assertEquals('foo',array_pop($this->stack));
			$this->assertTrue(empty($this->stack));
		}
	}
?>