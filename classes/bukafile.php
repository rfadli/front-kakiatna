<?php
class bukafile
{
	function getfile()
    {
    	//$handle = file_get_contents('/home/rian/Documents/config.json');
    	$handle = file_get_contents('/home/rian/config.json');
		$decode = json_decode($handle);
		
		$kakiatna = $decode->kakiatna->template;
		$status = $decode->kakiatna->status;
		
		if($status == "yes")
		{
			$template1 = $decode->kakiatna->template;
			return $template1;
		}
		else
		{
			$template2 = $decode->sugar->template;
			return $template2;
		}
		//die;
		//return $kakiatna;
    }
}

?>