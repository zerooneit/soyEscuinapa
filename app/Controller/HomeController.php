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
	
	public $helpers = array('Mobile');

	public function beforeFilter(){
		$extra_styles = array();
		$extra_classes = array();
		$extra_plugins = array();
		$extra_values = array();
		$extra_scripts = array();
		$extra_templates = array();
		$title_for_layout = '';
		$this->set(compact('extra_styles','extra_plugins','extra_classes','extra_values', 'title_for_layout','extra_scripts'));
		parent::beforeFilter();
	}

	public function process() {
		$path = func_get_args();
		$this->render(implode('/', $path));
	}

	

	public function index(){
	
		$extra_styles = array(
			'app_styles/app.home.styles'
		);

		$extra_values = array(
			'init.values'
		);

		$extra_plugins = array(
			'jquery.feeds.min',
			'jquery.tmpl.min',
			'jquery.tmplPlus.min'
		);
		
		$extra_scripts = array(
			'main'
		);
		
		

		$title_for_layout = 'Escuin@pa';

		$this->set(compact('extra_styles','extra_values','extra_plugins', 'extra_scripts','title_for_layout', 'extra_templates','news'));
		
		$this->layout = 'base';
	}
	
	public function galleries($gallery_name = null, $photo_id = 0){
		$path = func_get_args();
		$isIndex = '';	
		$extra_styles = array(
			'app_styles/app.home.styles'
		);

		$extra_values = array(
			'init.values'
		);
		$file =  WWW_ROOT.'galleries_data'.DS.$gallery_name.'.json';
		if (empty($gallery_name) ){
			$gallery_name = Inflector::slug('Galerias');
			$isIndex = 'gallery_index';
		}
		
		if ( file_exists($file) ){
			
			$data = json_decode(file_get_contents($file));
		}
		
		if (empty($data)){ $this->redirect('404');}
		
		$title_for_layout = 'Galer&iacute;a - '.Inflector::humanize($gallery_name);

		$this->set(compact('extra_styles','extra_values','extra_plugins','title_for_layout','path','data'));
		
		$this->layout = 'base';
		
		if (!empty($isIndex))	$this->render($isIndex);
		
	}
}
