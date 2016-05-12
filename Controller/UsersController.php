<?php
/**
 * @Author: sebb
 * @Date:   2015-03-16 17:51:01
 * @Last Modified by:   kasper
 * @Last Modified time: 2016-05-12 19:03:20
 */
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	private $slug = "";

	public function add($gameSlug = "no-game") {
		$this->set('gameSlug', $this->params['slug']);

		Configure::write('slug', $gameSlug);

		$this->Crud->on('afterSave', function(CakeEvent $event) {
			$this->redirect('/users/index/'. $this->request->params['slug']);
		});

		if($this->request->is('post')) {
			$this->Crud->execute('add');
		}
	}

	public function index($gameSlug = null) {
		$this->set('gameSlug', $gameSlug);
	}

}