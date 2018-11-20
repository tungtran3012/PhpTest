<?php
 
class DemoMock extends Illuminate\Foundation\Testing\TestCase {
 
	/**
	 * Creates the application.
	 *
	 * @return \Illuminate\Foundation\Application
	 */
	public function createApplication()
	{
		$app = require __DIR__.'/../bootstrap/app.php';
 
		$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();
 
		return $app;
	}
 
    public function getJsonMock($url){
        $json = file_get_contents(__DIR__.'/DataMock/'.$url);
        return $json;
    }
 	public function ConvertToArray()
 	{
 		# code...
 	//Đọc json và chuyển sang kiểu mảng
	$jsonData = $this->getJsonMock('data.json');
	$jsonArray = json_decode($jsonData, true);

	//Đọc xml và chuyển sang kiểu mảng
	$xmlData = $this->getJsonMock('data.xml');
	$xml = simplexml_load_string($xmlData, "SimpleXMLElement", LIBXML_NOCDATA);
	$json = json_encode($xml);
	$array = json_decode($json, TRUE);
 	}
}