<?php
class contact_controller extends controller 
{
	public function index()
	{
		$instance = new bukafile();
		$a = $instance->getfile();
		$template = $a;
		
		if($template == 'template_kakiatna.php')
		{
			$content = $this->getView(DOCVIEW.'/kakiatna/contact.php', array());
			$p = array(
				'content' => $content
			);
			$view = $this->getView(DOCVIEW.'/template/template_kakiatna.php', $p);
			echo $view;
		}
		else
		{
			$content = $this->getView(DOCVIEW.'/sugar/aboutus.php', array());
			$p = array(
				'content' => $content
			);
	
			echo $this->getView(DOCVIEW.'/template/template_kakiatna.php', $p);
		}
	}
}
?>