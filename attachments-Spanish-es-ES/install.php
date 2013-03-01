<?php
/**
 * Attachments language pack installation script
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
class attachments_es_es_language_packInstallerScript 
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

		// Verify that the Joomla version is adequate
		$this->minimum_joomla_release = $parent->get( 'manifest' )->attributes()->version;		  
		if ( version_compare(JVERSION, $this->minimum_joomla_release, 'lt') ) {
			$msg = JText::sprintf('ATTACHMENTS_ES_ES_LANGUAGE_PACK_ERROR_INADEQUATE_JOOMLA_VERSION_S',
								  $this->minimum_joomla_release);
			$app->enqueueMessage($msg, 'error');
			return false;
			}

		// Make sure the component is alread installed
		if(!JComponentHelper::isEnabled('com_attachments', true))
		{
			$msg = JText::_('ATTACHMENTS_ES_ES_LANGUAGE_PACK_ERROR_INSTALL_COMPONENT_FIRST');
			$app->enqueueMessage($msg, 'error');
			return false;
		}
	}

}
