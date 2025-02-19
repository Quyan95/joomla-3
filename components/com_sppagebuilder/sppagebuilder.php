<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2022 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\MVC\Controller\BaseController;

//no direct access
defined('_JEXEC') or die('Restricted access');

//CSRF
// HTMLHelper::_('jquery.token'); // todo: to be removed

require_once JPATH_ROOT . '/components/com_sppagebuilder/helpers/autoload.php';

BuilderAutoload::loadClasses();
BuilderAutoload::loadGlobalAssets();

$controller = BaseController::getInstance('Sppagebuilder');
$controller->execute(Factory::getApplication()->input->get('task'));
$controller->redirect();
