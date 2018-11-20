<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testGetName()
	{
	    $response = $this->call('GET', 'customer/name');
	    $this->assertResponseOk();
	    $this->assertResponseStatus(200); //Tương đương với lệnh trên
	    $this->assertEquals('Lê Anh', $response->getContent());
	}
}
