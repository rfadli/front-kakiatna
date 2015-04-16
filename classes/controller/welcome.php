<?php
class welcome_controller extends controller 
{
	public function index()
	{
		$instance = new bukafile();
		$a = $instance->getfile();
		$template = $a;
		
		if($template == 'template_kakiatna.php')
		{
			$content = $this->getView(DOCVIEW.'/welcome/index.php', array());
			$p = array(
				'content' => $content
			);
	
			echo $this->getView(DOCVIEW.'template/'.$a, $p);
		}
		else
		{
			$content = $this->getView(DOCVIEW.'/welcome/welcome.php', array());
			$p = array(
				'content' => $content
			);
	
			echo $this->getView(DOCVIEW.'template/'.$a, $p);
		}
		
		
	}
	
}