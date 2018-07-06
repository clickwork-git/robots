<?php

class pluginRobots extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'text'=>''
		);
	}

	public function form()
	{
		global $Language;

		$html = '<div>';
		$html .= '<textarea name="text" id="jstext">'.$this->getValue('text').'</textarea>';
		$html .= '</div>';

		return $html;
	}

	public function siteHead(){

		global $Url;

		$slug = $Url->slug();
        $noindex = $this->getValue('text');

        if ($slug !== '' && strpos($noindex,$slug) !== false ){
		   	echo '<meta name="robots" content="noindex" />'.PHP_EOL;
		}

	}

}
