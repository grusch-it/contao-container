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

$GLOBALS['TL_CTE']['container'] = array
(
  'containerStart' => 'ContainerStart',
  'containerStop'  => 'ContainerStop',
);

$GLOBALS['TL_WRAPPERS']['start'][] = 'containerStart';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'containerStop';
