<?php
	/**
	 * 
	 */
	use PHPUnit\FrameWork\TestCase;
	class API1Test extends TestCase
	{
		public function testGetName()
		{
		    $response = $this->call('GET', 'customer/name');
		    $this->assertResponseOk();
		    $this->assertResponseStatus(200); //Tương đương với lệnh trên
		    $this->assertEquals('Lê Anh', $response->getContent());
		}
	}
?>