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

	public function process() {
		$path = func_get_args();
		$this->render(implode('/', $path));
	}

	

	public function index(){
		
	}
	
	public function galleries($gallery_name = null, $photo_id = 0){
		extract($this->viewVars, EXTR_REFS );
		$path = func_get_args();
			
		$isIndex = '';	
		
		
		$extra_plugins[] = 'jquery.feeds.min';
		$extra_plugins[] = 'jquery.ztwitterfeed.min';
		$extra_plugins[] = 'galleria/galleria-1.2.9.min';
		$extra_plugins[] = 'galleria/themes/classic/galleria.classic.min.js';
		

		$extra_values[] = 'init.values';
		
		$data = $this->Gallery->findByGalleryName( strtolower(Inflector::humanize($gallery_name)) );
		$this->set('data', $data);
		

		$extra_scripts[] = 'main';
		
		
		
		if (empty($gallery_name) ){
			$gallery_name = Inflector::slug('Galerias');
			$isIndex = 'gallery_index';
		}
		
		if ( empty($data) && empty($isIndex) ){
			throw new NotFoundException;
		}
		
		if(!empty($isIndex)) { $this->redirect('/gallery/');}
		
		$title_for_layout = 'Escuinapa - Galer&iacute;a - '.Inflector::humanize($gallery_name);

		$meta_tags['description'] = utf8_encode($data['Gallery']['gallery_description']);
		$image = json_decode($data['Media'][0]['media_object']);
		$fb_tags['og:title'] = Inflector::humanize($title_for_layout);
		$fb_tags['og:description'] = utf8_encode($data['Gallery']['gallery_description']);
		$fb_tags['og:url'] = Router::url(null, true);
		$fb_tags['og:image'] =  Router::url('/', true).substr($image->url,1);
		
		
		$tw_tags['twitter:url'] = Router::url(null, true);
		$tw_tags['twitter:title'] = Inflector::humanize($title_for_layout);
		$tw_tags['twitter:description'] = utf8_encode($data['Gallery']['gallery_description']);
		$tw_tags['twitter:image'] = Router::url('/', true).substr($image->url,1);
			
		
		
		$this->layout = 'base';
		
		
		
	}
}
