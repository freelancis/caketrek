<?php
App::uses('Guide', 'Model');

/**
 * Guide Test Case
 *
 */
class GuideTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.guide',
		'app.tourist',
		'app.user',
		'app.badge',
		'app.badges_user',
		'app.journey'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Guide = ClassRegistry::init('Guide');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Guide);

		parent::tearDown();
	}

}
