<?php
/**
 * 
 */
class SampleCommand
{
	    private $c;
 
	    private function subtract($a, $b)
	    {
	        return $a - $b;
	    }
	 
	    private function add($a, $b)
	    {
	        return $a + $b + $this->c;
	    }
	 
	    public function multiple($a,$b){
	        return $a * $b * $this->$c;
	    }
}

?>
