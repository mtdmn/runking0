<?php
App::uses('Workout', 'Model');

/**
 * Workout Test Case
 *
 */
class WorkoutTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.workout',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Workout = ClassRegistry::init('Workout');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Workout);

		parent::tearDown();
	}

}
