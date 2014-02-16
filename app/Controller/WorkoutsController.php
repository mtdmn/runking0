<?php

class WorkoutsController extends AppController {
	public function index() {
		$userid = $this->Session->read('User.userid');
		$this->set('workouts', $this->Workout->find('all', 
			array('conditions'=> array('Workout.user_id'=>$userid))
		));
	}
}
