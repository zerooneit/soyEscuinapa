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
class GalleriesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Galleries';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array('Author', 'Gallery', 'Media', 'New');
	
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
		
	}
	
	public function galleries($gallery_name = null, $photo_id = 0){
		
		$path = func_get_args();
		
		
		$isIndex = '';	
		$extra_styles = array(
			
		);
		
		$extra_plugins = array(
			'jquery.feeds.min',
			'jquery.ztwitterfeed.min',
			'galleria/galleria-1.2.9.min',
			'galleria/themes/classic/galleria.classic.min.js'
		);

		$extra_values = array(
			'init.values'
		);
		
		$data = $this->Gallery->findByGalleryName( strtolower(Inflector::humanize($gallery_name)) );
		
		$galleries = array(
			'gallery_name' => $gallery_name,
			'humanize' => Inflector::slug($gallery_name),
			'db_galleries' =>  $data
			
		);
		
		$extra_scripts = array(
			'main'
		);
		
		
		
		if (empty($gallery_name) ){
			$gallery_name = Inflector::slug('Galerias');
			$isIndex = 'gallery_index';
		}
		
		if ( empty($data) && empty($isIndex) ){
			throw new NotFoundException;
		}
		
		
		$title_for_layout = 'Galer&iacute;a - '.Inflector::humanize($gallery_name);

		$this->set(compact('extra_styles','extra_values','extra_plugins','extra_scripts','title_for_layout','path','data','galleries'));
		
		$this->layout = 'base';
		
		
		
	}
}
