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
	public $uses = array('Author', 'Gallery', 'Media', 'New');
	
	public $helpers = array('Mobile');

	

	public function process() {
		$path = func_get_args();
		$this->render(implode('/', $path));
	}

	

	public function index(){
		
		extract($this->viewVars, EXTR_REFS );
		$extra_styles[] = 'app_styles/app.home.styles';

		$extra_values[] ='init.values';

		$extra_plugins[] = 'jquery.feeds.min';
		$extra_plugins[] = 'jquery.ztwitterfeed.min';
		$extra_plugins[] = 'jquery.tmpl.min';
		$extra_plugins[] = 'jquery.tmplPlus.min';
		
		$extra_scripts[] = 	'main';
		
	
		$title_for_layout = 'Escuinapa - Inicio';
		
			
		$this->layout = 'base';
	}
	

}
