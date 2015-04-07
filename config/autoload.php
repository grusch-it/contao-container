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

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
  'Gruschit\ContainerElement\Element',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
  // Elements
  'Gruschit\ContainerElement\Element\ContainerStart' => 'system/modules/gruschit_container/elements/ContainerStart.php',
  'Gruschit\ContainerElement\Element\ContainerStop'  => 'system/modules/gruschit_container/elements/ContainerStop.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
( 
  'ce_container_start' => 'system/modules/gruschit_container/templates/elements',
  'ce_container_stop'  => 'system/modules/gruschit_container/templates/elements',
));
