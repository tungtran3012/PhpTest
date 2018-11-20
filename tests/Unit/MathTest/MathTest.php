<?php
/**
 * 
 */
use PHPUnit\FrameWork\TestCase;
class MathTest extends TestCase
{
	public function createApplication()
	{
	    $app = require __DIR__.'/../bootstrap/app.php';
	 
	    $app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
	 
	    return $app;
	}
	public function setUp()
    { 
        $app = $this->createApplication();
        //nếu có tham số ở hàm khởi tạo
        $math = $app->make('App\Command\Math', ['params' => $something]);
        //nếu không có tham số
        $math = $app->make('App\Command\Math');
    } 

    public function testAdd()
    {
        $sum = $math->add(1,3);
        $this->assertEquals($sum,4);
    }

}
?>