<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper {
	
	public function getGalleries(){
		//let $modelName be User  
		App::import("Model", "Gallery");  
		$model = new Gallery();  
		$galleries = $model->query("SELECT Gallery.gallery_id, Gallery.gallery_name, Gallery.gallery_description FROM esc_galleries AS Gallery
									JOIN (SELECT FLOOR(
									  RAND( ) * (
									    SELECT MAX( gallery_id ) FROM esc_galleries)
									  ) AS rand_id
									) AS GalleryRand
									WHERE Gallery.gallery_id >= GalleryRand.rand_id
									ORDER BY Gallery.gallery_id ASC
									LIMIT 3 ");
		
			return $galleries;
		
	}
	
	public function indexGalleries($page=0, $limit =12){
		App::import("Model", "Gallery");  
		$model = new Gallery();
		$index = $page * $limit;
		$galleries = $model->query("SELECT Gallery.gallery_id, Gallery.gallery_name, Gallery.gallery_description FROM esc_galleries AS Gallery
										ORDER BY Gallery.gallery_id ASC	LIMIT $index , $limit  ");
		
		return $galleries;
		
	}
	
	public function getGalleryFirstMedia($gallery_id){
		if (!is_int($gallery_id)) return array();
		
		App::import("Model", "Media");  
		$model = new Media();
		$authors = $model->query("
			SELECT * FROM esc_media AS Media LEFT JOIN esc_gallery_has_media AS GalleriesHasMedia ON 
				Media.media_id = GalleriesHasMedia.media_id
			WHERE
				GalleriesHasMedia.gallery_id =". $gallery_id ." LIMIT 1	");
		
		return $authors;  
		
	}
	
	public function getAuthorsFromGallery($gallery_id){
		
		if (!is_int($gallery_id)) return array();
		
		App::import("Model", "Author");  
		$model = new Author();
		$authors = $model->query("
			SELECT * FROM esc_authors AS Author LEFT JOIN esc_authors_has_galleries AS AuthorHasGalleries ON 
				Author.author_id = AuthorHasGalleries.author_id
			WHERE
				AuthorHasGalleries.gallery_id =". $gallery_id ."
		");
		
		return $authors;  
	}	
	
}
