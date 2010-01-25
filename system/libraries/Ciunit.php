<?php

class Ciunit
{
	/**
	 * The constructor for Ciunit
	 *
	 * This constructor initializes the results array
	 */
	public function Ciunit()
	{
		$this->results = array();

		$this->startBackTraceDepth = 2;
	}

	public function is_bool($candidate, $message)
	{		
		$backTraceDepth = $this->startBackTraceDepth;
		
		$res = $this->is_a('is_bool', $candidate, $message, $backTraceDepth+1);
		
		// Push the Result in the list of results
		array_push($this->results, $res);
	}

	
	public function is_not_bool($candidate, $message)
	{
		$backTraceDepth = $this->startBackTraceDepth;

		$res = $this->is_a('is_bool', $candidate, $message, $backTraceDepth+1);
		$res['result'] = $res['result']? false : true;
		
		// Push the Result in the list of results
		array_push($this->results, $res);
	}

	private function is_a($test_type, $candidate, $message, $traceDepth)
	{
		$res['result'] = $test_type($candidate)? true : false;

		$res['testDescription'] = $message;

		$res['testName'] = $test_type;
		
		// Get the BackTrace
		$backTrace = debug_backtrace();
		// Chomp off the backtrace till only the required level
		$res['backTrace'] = array_intersect_key($backTrace, array_flip(range(0, $traceDepth-1)));

		// Reverse the Backtrace stack
		$res['backTrace'] = array_reverse($res['backTrace']);
		// Unset the Object key for the outermost trace since it is gigantic
		unset($res['backTrace'][0]['object']);

		// Get the first or the outermost caller function/method
		$caller = $res['backTrace'][0];
		$res['callerFilename'] = $caller['file'];
		$res['callerLineno'] = $caller['line'];
		$res['callerFunction'] = $caller['function'];

		return $res;
	}
	
	/*  This method returns back all the results stored  */
	public function generate_report()
	{
		return $this->results;
	}
	
	/*  The array to hold the results of all the tests  */
	private $results;

	/*  The Initial BackTrace Depth  */
	private $startBackTraceDepth;
}

?>
