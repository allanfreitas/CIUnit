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
        
        $this->is_integer_true();
        $this->is_integer_false();
        
        //$this->is_string_true();
        //$this->is_string_false();
        
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
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
