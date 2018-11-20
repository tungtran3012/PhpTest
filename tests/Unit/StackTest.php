<?php
use PHPUnit\Framework\TestCase;
class StackTest extends TestCase
{
	public function testEmpty()
	{
		$stack=array();
		$this->assertEmpty($stack);
		return $stack;
	}
	/**
	* @depends testEmpty
	*/
	public function testPush(array $stack)
	{
		# code...
		array_push($stack, 'foo');
		$this->assertEquals('foo',$stack[count($stack)-1]);
		$this->assertNotEmpty($stack);
		return $stack;
	}
	/**
	* @depends testPush
	*/
	public function testPop(array $stack)
	{
		# code...
		$this->assertEquals('foo',array_pop($stack));
		$this->assertEmpty($stack);

	}
}
?>