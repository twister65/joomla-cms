<?php
/**
 * Joomla! Content Management System
 *
 * @copyright  Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Extension;

\defined('JPATH_PLATFORM') or die;

use Joomla\CMS\MVC\Factory\MVCFactoryServiceInterface;
use Joomla\CMS\MVC\Factory\MVCFactoryServiceTrait;

/**
 * MVC Component class.
 *
 * @since  4.0.0
 */
class MVCComponent extends Component implements MVCFactoryServiceInterface
{
	use MVCFactoryServiceTrait;
}
