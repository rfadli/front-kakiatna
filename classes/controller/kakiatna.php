<?php
class kakiatna_controller extends controller 
{
	public function index()
	{
		
		$content = $this->getView(DOCVIEW.'kakiatna/aboutus.php', array());
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template_kakiatna.php', $p);
		echo $view;

	}
	
	/*public function about()
	{
		
		$content = $this->getView(DOCVIEW.'kakiatna/about.php', array());
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;

	}
	
	public function contact()
	{
		
		$content = $this->getView(DOCVIEW.'kakiatna/contact.php', array());
		$p = array(
			'content' => $content
		);
		$view = $this->getView(DOCVIEW.'template/template.php', $p);
		echo $view;

	}*/
}