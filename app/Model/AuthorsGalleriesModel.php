<?php
App::uses('AppModel', 'Model');

class AuthorsGalleriesModel extends AppModel {
	public $name = 'AuthorsGalleries';
	public $useTable = 'authors_has_galleries';
	
	public $belongsTo = array('Authors','Galleries');
}
?>