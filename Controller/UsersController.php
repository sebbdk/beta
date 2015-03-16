<?php
/**
 * @Author: sebb
 * @Date:   2015-03-16 17:51:01
 * @Last Modified by:   sebb
 * @Last Modified time: 2015-03-16 19:00:06
 */
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public function add($gameSlug = "no-game") {
		$this->set('gameSlug', $this->params['slug']);
		$this->Crud->execute('add');
	}

}