<?php

class controller
{
	protected function getView($filename, $variable)
    {
        extract($variable);
        ob_start();
        (include $filename);
        $content = ob_get_contents();
        ob_end_clean ();
        return $content;
    }
}