<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
        
        $this->load->library('ciunit');
	}
	
	function index()
	{
        //$this->is_bool_true();
        //$this->is_bool_false();
        
        //$this->is_integer_true();
        //$this->is_integer_false();
        
        //$this->is_string_true();
        //$this->is_string_false();
        
        //$this->is_float_true();
        //$this->is_float_false();
        
        //$this->is_numeric_true();
        //$this->is_numeric_false();
        
        //$this->is_array_true();
        //$this->is_array_false();
        
        //$this->is_array_empty_true();
        //$this->is_array_empty_false();
        
        //$this->is_object_true();
        //$this->is_object_false();
        
        //$this->is_true();
        //$this->is_false();
        
        //$this->is_null_true();
        //$this->is_null_false();
        
        //$this->is_greater();
        //$this->is_lesser();
        
        //$this->are_equal();
        //$this->are_not_equal();
        
        //$this->array_count_equals_true();
        //$this->array_count_equals_false();
        
        echo "<pre>";
        print_r($this->ciunit->generate_report());
        echo "</pre>";
	}
    
    function is_bool_true()
    {
        $this->ciunit->is_bool(true,"Checking if true is boolean");
    }
    
    function is_bool_false()
    {
        $this->ciunit->is_not_bool("hello","Checking if 'hello is boolean");
    }
    
    function is_integer_true()
    {
        $this->ciunit->is_integer(5, "5 is an ineteger");
    }
    
    function is_integer_false()
    {
        $this->ciunit->is_not_integer('a', "a is not an ineteger");
    }
    
    function is_string_true()
    {
        $this->ciunit->is_string('qwerty', "qwerty is a string");
    }
    
    function is_string_false()
    {
        $this->ciunit->is_not_string(4, "4 is not a string");
    }
    
    function is_float_true()
    {
        $this->ciunit->is_float(5.43, "5.43 is a float");
    }
    
    function is_float_false()
    {
        $this->ciunit->is_not_float('2', "'2' is not a float");
    }
    
    function is_numeric_true()
    {
        $this->ciunit->is_numeric(0xFF, "0xFF is a numeric");
    }
    
    function is_numeric_false()
    {
        $this->ciunit->is_not_numeric('0FF', "'0FF' is not a numeric");
    }
    
    function is_array_true()
    {
        $this->ciunit->is_array(array(), "An empty array passed");
    }
    
    function is_array_false()
    {
        $this->ciunit->is_not_array(0xFF, "0xFF is not an array");
    }
    
    function is_array_empty_true()
    {
        $this->ciunit->is_array_empty(array(), "Empty array passed");
    }
    
    function is_array_empty_false()
    {
        $this->ciunit->is_array_not_empty(array(3,2), "array(3,2) passed");
    }
    
    function is_object_true()
    {
        $this->ciunit->is_object(new DOMDocument(), "An instance of DOMDocument passed");
    }
    
    function is_object_false()
    {
        $this->ciunit->is_not_object(0xFF, "0xFF is not an object");
    }
    
    function is_true()
    {
        $this->ciunit->is_true(true, "True passed");
    }
    
    function is_false()
    {
        $this->ciunit->is_false(false, "False");
    }
    
    function is_null_true()
    {
        $this->ciunit->is_null(null, "Passed null");
    }
    
    function is_null_false()
    {
        $this->ciunit->is_not_null(0xFF, "0xFF is not null");
    }
    
    function is_greater()
    {
        $this->ciunit->is_greater(23, 21 , "23  > 21");
    }
    
    function is_lesser()
    {
        $this->ciunit->is_lesser(21, 23 , "21  < 23");
    }
    
    function are_equal()
    {
        $this->ciunit->are_equal(23, 23 , "23  === 23");
    }
    
    function are_not_equal()
    {
        $this->ciunit->are_not_equal(23, 21 , "23  != 21");
    }
    
    function array_count_equals_true()
    {
        $this->ciunit->array_count_equals(array(2,3), 2, "Sent array(2,3) and expected as 2");
    }
    
    function array_count_equals_false()
    {
        $this->ciunit->array_count_not_equals(array(2,3), 1, "Sent array(2,3) and expected as 1");
    }
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
