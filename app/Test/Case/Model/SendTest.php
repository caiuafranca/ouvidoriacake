<?php
App::uses('Send', 'Model');

/**
 * Send Test Case
 *
 */
class SendTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.send',
		'app.protocolo',
		'app.post',
		'app.tipo',
		'app.departamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Send = ClassRegistry::init('Send');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Send);

		parent::tearDown();
	}

}
