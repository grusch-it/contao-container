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
 * Front end content element "container" (wrapper stop).
 *
 * @author Michael Gruschwitz <info@grusch-it.de>
 */
class ContainerStop extends \Contao\ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_container_stop';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \Contao\BackendTemplate($this->strTemplate);
		}
	}
}

