<?php
	/**
	 * 
	 */
	use PHPUnit\FrameWork\TestCase;
	class ExceptionOneTest extends TestCase
	{
		
		public function devide($a,$b)
		{
			# code...
			if($b==0)
			{
				throw new InvalidArgumentException("can not devide for zero", 1);
				
			}
			return $a/$b;
		}
		/**
		* @expectedException InvalidArgumentException
		*/
		public function testInvalidArgument()
		{
			$this->devide(4,0);
		}


		/**
		* @expectedException InvalidArgumentException
		* @expectedExceptionMessage can not devide for zero
		*/
		public function testExceptionMessage()
		{
			$this->devide(4,0);
		}

		/**
		* @expectedException InvalidArgumentException
		* @expectedExceptionMessage devide for zero
		*/
		public function testRegexForExceptionMessage()
		{
				$this->devide(4,0);
		}

		//test Ma loi
		/**
		 * @expectedException InvalidArgumentException
		 * @expectedExceptionCode 1
		 */
		public function testCodeException()
		{
			$this->devide(4,0);
		}
	}
?>