<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_finder
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Finder\Administrator\Indexer\Parser;

\defined('_JEXEC') or die;

use Joomla\Component\Finder\Administrator\Indexer\Parser;

/**
 * RTF Parser class for the Finder indexer package.
 *
 * @since  2.5
 */
class Rtf extends Parser
{
	/**
	 * Method to process RTF input and extract the plain text.
	 *
	 * @param   string  $input  The input to process.
	 *
	 * @return  string  The plain text input.
	 *
	 * @since   2.5
	 */
	protected function process($input)
	{
		// Remove embedded pictures.
		$input = preg_replace('#{\\\pict[^}]*}#mi', '', $input);

		// Remove control characters.
		$input = str_replace(array('{', '}', "\\\n"), array(' ', ' ', "\n"), $input);
		$input = preg_replace('#\\\([^;]+?);#m', ' ', $input);
		$input = preg_replace('#\\\[\'a-zA-Z0-9]+#mi', ' ', $input);

		return $input;
	}
}
