<?php
/**
 * @Author: sebb
 * @Date:   2015-03-16 17:51:01
 * @Last Modified by:   kasper
 * @Last Modified time: 2016-05-12 18:15:46
 */
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function add($gameSlug = "no-game") {
		$this->set('gameSlug', $this->params['slug']);

		$this->Crud->on('afterSave', function() {
			$this->redirect(['action' => 'index']);
		});

		$this->Crud->execute('add');
	}

	public function index($gameSlug = null) {
		$this->set('gameSlug', $gameSlug);
	}

}