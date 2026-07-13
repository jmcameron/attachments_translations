<?php
/**
 * Attachments language pack installation script
 *
 * @package Attachments
 * @author Jonathan M. Cameron
 * @copyright Copyright (C) 2013-2026 Jonathan M. Cameron
 * @license https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */

defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.helper');

use JMCameron\Component\Attachments\Site\Helper\AttachmentsDefines;

class attachments_language_packInstallerScript
{
    public function preflight($type, $parent)
    {
        $app = JFactory::getApplication();
        $lang = JFactory::getLanguage();
        $lang->load('files_attachments_language_pack.install', dirname(__FILE__));

        $this->minimum_joomla_release = $parent->getManifest()->version;
        if (version_compare(JVERSION, $this->minimum_joomla_release, 'lt')) {
            $msg = JText::sprintf(
                'ATTACHMENTS_LANGUAGE_PACK_ERROR_INADEQUATE_JOOMLA_VERSION_S',
                $this->minimum_joomla_release
            );
            $app->enqueueMessage('<br/>', 'error');
            $app->enqueueMessage($msg, 'error');
            $app->enqueueMessage('<br/>', 'error');
            return false;
        }

        $result = JComponentHelper::getComponent('com_attachments', true);
        if (!$result->enabled) {
            $msg = JText::_('ATTACHMENTS_LANGUAGE_PACK_ERROR_INSTALL_COMPONENT_FIRST');
            $app->enqueueMessage('<br/>', 'error');
            $app->enqueueMessage($msg, 'error');
            $app->enqueueMessage('<br/>', 'error');
            return false;
        }

        require_once JPATH_SITE . '/components/com_attachments/src/Helper/AttachmentsDefines.php';
        $min_version = '4.0.4';
        if (version_compare(AttachmentsDefines::$ATTACHMENTS_VERSION, $min_version, 'lt')) {
            $msg = JText::sprintf('ATTACHMENTS_LANGUAGE_PACK_ERROR_ATTACHMENTS_TOO_OLD_S', $min_version);
            $app->enqueueMessage('<br/>', 'error');
            $app->enqueueMessage($msg, 'error');
            $app->enqueueMessage(sprintf('Version: %s', AttachmentsDefines::$ATTACHMENTS_VERSION), 'error');
            $app->enqueueMessage('<br/>', 'error');
            return false;
        }
    }
}
