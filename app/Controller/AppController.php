<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public function beforeFilter(){
		/** Extra CSS **/	
		$extra_styles = array();
		
		/** User extra JS Classes **/
		$extra_classes = array();
		
		/** User extra JS Plugins **/
		$extra_plugins = array();
		
		/** User extra JS Init Values **/
		$extra_values = array();
		
		/** User extra JS Classes **/
		$extra_scripts = array();
		
		/** User extra JS Templates **/
		$extra_templates = array();
		
		/** User extra Metatags **/
		$meta_tags =array(
			'description' => 'Escuinapa es un pueblo pequeño y tranquilo al sur de Sinaloa, México. Apodado "La Perla Camaronera" por uno de sus productos principales, el Camarón. Sus Actividades primordiales son la Pesca, Ganadería y la Agricultura.'
			
		);
		
		/** Open Graph Metatags **/
		$fb_tags = array(
			'fb:admins' => '1324055639',
			'fb:page_id' => '317180751716622',
			'og:title' => 'Escuinapa',
			'og:description' => 'Escuinapa es un pueblo pequeño y tranquilo al sur de Sinaloa, México. Apodado "La Perla Camaronera" por uno de sus productos principales, el Camarón. Sus Actividades primordiales son la Pesca, Ganadería y la Agricultura.',
			'og:url' => 'http://escuinapense.com.mx',
			'og:site_name' => 'Escuinapa',
			'og:type' => 'website',
			'og:image' => 'http://escuinapense.com.mx/img/Escuinapa_escudo.gif' 
		);
		
		/** Twitter Card Metatags **/
		$tw_tags =array(
			'twitter:card' => 'summary',
			'twitter:site' => '@escuinapa_',
			'twitter:creator' => '@diegoresendez',
			'twitter:url' => 'http://escuinapense.com.mx',
			'twitter:title' => 'Escuinapa',
			'twitter:description' => 'Escuinapa es un pueblo pequeño y tranquilo al sur de Sinaloa, México. Apodado "La Perla Camaronera" por uno de sus productos principales, el Camarón. Sus Actividades primordiales son la Pesca, Ganadería y la Agricultura.',
			'twitter:image' => 'http://escuinapense.com.mx/img/Escuinapa_escudo.gif' 
			
		);
		
		
		$title_for_layout = 'Escuinapa - ';
		
				
		$this->set( compact('extra_styles', 'extra_classes', 'extra_plugins', 'extra_values', 'extra_scripts', 
							'extra_templates', 'meta_tags', 'fb_tags', 'tw_tags', 'title_for_layout') );
		parent::beforeFilter();
	}
}
