<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Controller', 'Controller');
App::uses('CrudControllerTrait', 'Crud.Lib');

header('Access-Control-Allow-Origin: *');
class AppController extends Controller {

	use CrudControllerTrait;

	public $components = [
		'RequestHandler',
		'Crud.Crud' => [
			'actions' => [
				'index', 'view', 'add', 'edit', 'delete',
				'admin_index'
			],
			'listeners' => ['Api']
		]
	];

}
