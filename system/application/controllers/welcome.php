<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
        
        $this->load->library('ciunit');
	}
	
	function index()
	{
        $this->is_bool_true();
        $this->is_bool_false();
        
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
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
