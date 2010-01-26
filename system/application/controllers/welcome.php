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
        
        $this->is_array_empty_true();
        $this->is_array_empty_false();
        
        //$this->is_object_true();
        //$this->is_object_false();
        
        //$this->is_true();
        //$this->is_false();
        
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
    
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
