<?php
/**
 * Attachments Turkish (tr-TR) language pack installation script 
 *
 * @package Attachments
 *
 * @author Jonathan M. Cameron
 * @copyright Copyright (C) 2013 Jonathan M. Cameron
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 * @link http://joomlacode.org/gf/project/attachments/frs/
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

// Import the component helper
jimport('joomla.application.component.helper');


/**
 * The attachments language installation class
 *
 * @package Attachments
 */
class attachments_tr_tr_language_packInstallerScript 
{
	/**
	 * Attachments component preflight function
	 *
	 * @param $type : type of installation
	 * @param $parent : the installer parent
	 */
	public function preflight($type, $parent)
	{
		$app = JFactory::getApplication();

		// Load the installation language file
		$lang = JFactory::getLanguage();
		$lang->load('files_attachments_language_pack.install', dirname(__FILE__));

		// Verify that the Joomla version is adequate
		$this->minimum_joomla_release = $parent->get( 'manifest' )->attributes()->version;		  
		if ( version_compare(JVERSION, $this->minimum_joomla_release, 'lt') ) {
			$msg = JText::sprintf('ATTACHMENTS_LANGUAGE_PACK_ERROR_INADEQUATE_JOOMLA_VERSION_S',
								  $this->minimum_joomla_release);
			$app->enqueueMessage('<br/>', 'error');
			$app->enqueueMessage($msg, 'error');
			$app->enqueueMessage('<br/>', 'error');
			return false;
			}

		// Make sure the component is already installed
		$result = JComponentHelper::getComponent('com_attachments', true);
		if (! $result->enabled)
		{
			$msg = JText::_('ATTACHMENTS_LANGUAGE_PACK_ERROR_INSTALL_COMPONENT_FIRST');
			$app->enqueueMessage('<br/>', 'error');
			$app->enqueueMessage($msg, 'error');
			$app->enqueueMessage('<br/>', 'error');
			return false;
		}
	}

}
