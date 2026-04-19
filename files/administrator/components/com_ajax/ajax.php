<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_ajax
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// --- 2026 SECURITY BACKPORT START (CVE-2026-21629) ---
// Prevent unauthorized access to the ajax component in the backend
if (!JFactory::getUser()->authorise('core.manage', 'com_ajax')) {
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'), 403);
}
// --- 2026 SECURITY BACKPORT END ---

require_once JPATH_SITE . '/components/com_ajax/ajax.php';
