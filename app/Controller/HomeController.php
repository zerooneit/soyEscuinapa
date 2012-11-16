<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class HomeController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Home';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

	public function beforeFilter(){
		$extra_styles = array();
		$extra_classes = array();
		$extra_plugins = array();
		$extra_values = array();
		$title_for_layout = '';
		$this->set(compact('extra_styles','extra_plugins','extra_classes','extra_values', 'title_for_layout'));
		parent::beforeFilter();
	}

	public function process() {
		$path = func_get_args();
		$this->render(implode('/', $path));
	}

	public function mitierra(){
	

		$extra_styles = array(
			'app_styles/app.home.styles'
		);

		$extra_values = array(
			'init.values'
		);

		$extra_plugins = array(
			'jquery.fitvids'
		);

		$title_for_layout = 'Escuin@pa - Esta es mi tierra';

		$this->set(compact('extra_styles','extra_values','extra_plugins','title_for_layout'));
		
		$this->layout = 'base';
	}

	public function index(){
	

		$extra_styles = array(
			'app_styles/app.home.styles'
		);

		$extra_values = array(
			'init.values'
		);

		$extra_plugins = array(
			'jquery.fitvids'
		);

		$title_for_layout = 'Escuin@pa';

		$this->set(compact('extra_styles','extra_values','extra_plugins','title_for_layout'));
		
		$this->layout = 'base';
	}
}
