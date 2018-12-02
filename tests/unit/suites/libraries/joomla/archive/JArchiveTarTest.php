<?php
/**
 * @package     Joomla.UnitTest
 * @subpackage  Archive
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

require_once __DIR__ . '/JArchiveTestCase.php';

/**
 * Test class for JArchiveTar.
 * Generated by PHPUnit on 2011-10-26 at 19:34:30.
 *
 * @package     Joomla.UnitTest
 * @subpackage  Archive
 * @since       1.7.0
 */
class JArchiveTarTest extends JArchiveTestCase
{
	/**
	 * @var JArchiveTar
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @return void
	 */
	protected function setUp()
	{
		parent::setUp();

		$this->object = new JArchiveTar;
	}

	/**
	 * Overrides the parent tearDown method.
	 *
	 * @return  void
	 *
	 * @see     \PHPUnit\Framework\TestCase::tearDown()
	 * @since   3.6
	 */
	protected function tearDown()
	{
		unset($this->object);
		parent::tearDown();
	}

	/**
	 * Tests the extract Method.
	 *
	 * @return  void
	 */
	public function testExtract()
	{
		if (!JArchiveTar::isSupported())
		{
			$this->markTestSkipped('Tar files can not be extracted.');
		}

		$this->object->extract(__DIR__ . '/logo.tar', $this->outputPath);
		$this->assertFileExists($this->outputPath . '/logo-tar.png');
	}

	/**
	 * Tests the isSupported Method.
	 *
	 * @return  void
	 */
	public function testIsSupported()
	{
		$this->assertTrue(
			JArchiveTar::isSupported()
		);
	}
}
