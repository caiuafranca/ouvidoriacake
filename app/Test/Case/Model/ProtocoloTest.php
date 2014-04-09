<?php
App::uses('Protocolo', 'Model');

/**
 * Protocolo Test Case
 *
 */
class ProtocoloTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.protocolo',
		'app.post',
		'app.tipo',
		'app.departamento',
		'app.send'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Protocolo = ClassRegistry::init('Protocolo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Protocolo);

		parent::tearDown();
	}

}
