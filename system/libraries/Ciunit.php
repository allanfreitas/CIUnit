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
    
    public function is_array($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_array', 'is_array_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_not_array($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_array', 'is_not_array_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_array_empty($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_array_empty', 'is_array_empty_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_array_not_empty($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_array_not_empty', 'is_array_not_empty_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_object($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_object', 'is_object_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_not_object($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_object', 'is_not_object_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_true($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_true', 'is_true_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_false($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_false', 'is_false_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }

    public function is_null($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_null', 'is_null_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_not_null($candidate, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->is_x('is_not_null', 'is_not_null_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_greater($candidate1, $candidate2, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $candidate = $candidate1 - $candidate2;
        $res = $this->is_x('is_greater', 'is_greater_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function is_lesser($candidate1, $candidate2, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $candidate = $candidate1 - $candidate2;
        $res = $this->is_x('is_lesser', 'is_lesser_assert', $candidate, $message, $backTraceDepth+1);
        
        // Push the Result in the list of results
        array_push($this->results, $res);
    }
    
    public function are_equal($candidate1, $candidate2, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->are_x('are_equal', 'are_equal_assert', $candidate1, $candidate2, $message, $backTraceDepth+1);
        
        // Push the Result in the laret of results
        array_push($this->results, $res);
    }
    
    public function are_not_equal($candidate1, $candidate2, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $res = $this->are_x('are_not_equal', 'are_not_equal_assert', $candidate1, $candidate2, $message, $backTraceDepth+1);
        
        // Push the Result in the laret of results
        array_push($this->results, $res);
    }
    
    public function array_count_equals($array, $count, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $real_count = count($array);
        $res = $this->are_x('are_equal', 'are_equal_assert', $real_count, $count, $message, $backTraceDepth+1);
        
        // Push the Result in the laret of results
        array_push($this->results, $res);
    }
    
    public function array_count_not_equals($array, $count, $message)
    {
        $backTraceDepth = $this->startBackTraceDepth;

        $real_count = count($array);
        $res = $this->are_x('are_not_equal', 'are_not_equal_assert', $real_count, $count, $message, $backTraceDepth+1);
        
        // Push the Result in the laret of results
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
    
    private function are_x($test_type, $callback, $candidate1, $candidate2, $message, $traceDepth)
    {
        $res['result'] = $this->$callback($candidate1, $candidate2);

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
    
    private function is_array_assert($candidate)
    {
        return is_array($candidate);
    }

    private function is_not_array_assert($candidate)
    {
        return !(is_array($candidate));
    }
    
    private function is_array_empty_assert($candidate)
    {
        return (count($candidate) === 0)? true : false;
    }

    private function is_array_not_empty_assert($candidate)
    {
        return (count($candidate) === 0)? false : true;
    }
    
    private function is_object_assert($candidate)
    {
        return is_object($candidate);
    }

    private function is_not_object_assert($candidate)
    {
        return !is_object($candidate);
    }
    
    private function is_true_assert($candidate)
    {
        return ($candidate === true)? true : false;
    }

    private function is_false_assert($candidate)
    {
        return ($candidate === false)? true : false;
    }
    
    private function is_null_assert($candidate)
    {
        return is_null($candidate);
    }

    private function is_not_null_assert($candidate)
    {
        return !is_null($candidate);
    }

    private function is_greater_assert($candidate)
    {
        return ($candidate > 0)? true : false;
    }
    
    private function is_lesser_assert($candidate)
    {
        return ($candidate < 0)? true : false;
    }
    
    private function are_equal_assert($candidate1, $candidate2)
    {
        return ($candidate1 === $candidate2)? true : false;
    }
    
    private function are_not_equal_assert($candidate1, $candidate2)
    {
        return ($candidate1 === $candidate2)? false : true;
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
