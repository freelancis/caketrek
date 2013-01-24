<?php
App::uses('Tourist', 'Model');

/**
 * Tourist Test Case
 *
 */
class TouristTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tourist',
		'app.user',
		'app.badge',
		'app.badges_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tourist = ClassRegistry::init('Tourist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tourist);

		parent::tearDown();
	}

}
