<?php
/* Auth Test cases generated on: 2012-03-12 16:17:26 : 1331569046*/
App::uses('Auth', 'Model');

/**
 * Auth Test Case
 *
 */
class AuthTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.auth');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Auth = ClassRegistry::init('Auth');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Auth);

		parent::tearDown();
	}

}
