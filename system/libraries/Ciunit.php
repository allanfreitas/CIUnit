<?php
/*
    The MIT License

    Copyright (c) 2010 Manish Sinha<mail@manishsinha.net>

    Permission is hereby granted, free of charge, to any person obtaining a copy
    of this software and associated documentation files (the "Software"), to deal
    in the Software without restriction, including without limitation the rights
    to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the Software is
    furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included in
    all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
    IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
    FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
    AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
    LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
    THE SOFTWARE.
*/

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

    /**
     * Assert succeeds if provided value is boolean
     */
    public function is_bool($candidate, $message)
    {       
        $backTraceDepth = $this->startBackTraceDepth;
        
        $res = $this->is_x('is_bool', 'is_bool_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    /**
     * Assert succeeds if provided value is not boolean
     */
    public function is_not_bool($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_bool', 'is_not_bool_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_integer($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_integer', 'is_integer_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_not_integer($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_integer', 'is_not_integer_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_string($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_string', 'is_string_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_not_string($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_string', 'is_not_string_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_float($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_float', 'is_float_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_not_float($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_float', 'is_not_float_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_numeric($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_numeric', 'is_numeric_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_not_numeric($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_numeric', 'is_not_numeric_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    /********************  GENERIC CONTROLLER FOR ASSERTS ************************************/
    private function is_x($test_type, $callback, $candidate, $message, $traceDepth)
    {
        $res['result'] = $this->$callback($candidate);

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
    /*********************** END GENERIC CONTROLLER FOR ASSERTS *******************************/

    /************************** START ASSERT SECTION ******************************************/

    private function is_bool_assert($candidate)
    {
        return is_bool($candidate);
    }

    private function is_not_bool_assert($candidate)
    {
        return !(is_bool($candidate));
    }

    private function is_integer_assert($candidate)
    {
        return is_int($candidate);
    }

    private function is_not_integer_assert($candidate)
    {
        return !(is_int($candidate));
    }

    private function is_string_assert($candidate)
    {
        return is_string($candidate);
    }

    private function is_not_string_assert($candidate)
    {
        return !(is_string($candidate));
    }
    
    private function is_float_assert($candidate)
    {
        return is_float($candidate);
    }

    private function is_not_float_assert($candidate)
    {
        return !(is_float($candidate));
    }
    
    private function is_numeric_assert($candidate)
    {
        return is_numeric($candidate);
    }

    private function is_not_numeric_assert($candidate)
    {
        return !(is_numeric($candidate));
    }

    /*************************** END ASSERT SECTION ******************************************/
    
    /*  This method returns back all the results stored  */
    public function generate_report()
    {
        return $this->results;
    }
    
    /****************************** START PRIVATE FIELDS  ************************************/

    /*  The array to hold the results of all the tests  */
    private $results;

    /*  The Initial BackTrace Depth  */
    private $startBackTraceDepth;

    /***************************** END PRIVATE FIELDS *****************************************/
}

?>
