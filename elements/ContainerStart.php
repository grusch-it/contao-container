<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   gruschit_container
 * @author    Michael Gruschwitz <info@grusch-it.de>
 * @license   LGPL
 * @copyright Michael Gruschwitz 2015
 */

namespace Gruschit\ContainerElement\Element;

/**
 * Front end content element "container" (wrapper start).
 *
 * @author Michael Gruschwitz <info@grusch-it.de>
 */
class ContainerStart extends \Contao\ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_container_start';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \Contao\BackendTemplate($this->strTemplate);
			$this->Template->title = $this->headline;
		}
	}

	/**
	 * Parse the template
	 * @return string
	 */
	public function generate()
	{
		parent::generate();

		$this->Template->class = trim('ce_' . str_replace('Start', '', $this->type) . ' ' . $this->cssID[1]);

		return $this->Template->parse();
	}
}

