<?php
/**
 * 
 */

use Illuminate\Support\Facades\Artisan;
class DatabaseTest extends Illuminate\Foundation\Testing\TestCase
{
	/**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
	function createApplication()
	{
		# code...
		putenv('DB_DEFAULT=mysql_test');
		$app = require __DIR__ . '/../bootstrap/app.php';
		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
		return $app;
	}
	public function setUp()
	{
		# code...
		parent::setUp();
		Artisan::call('migrate');
	}
	public function tearDown()
	{
		Artisan::call('migrate:reset');
		parent::tearDown();
	}
	public function testDatabase()
	{
	    $result = Customer::first();
	    $this->assertEquals(1,count($result));
	    $this->assertEquals('Lê Anh',$result->name);
	}	
}
?>