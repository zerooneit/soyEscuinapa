<?php
App::uses('AppModel', 'Model');

class Author extends AppModel {
	public $primaryKey = 'author_id';
	public $virtualFields = array(
		'full_name' => 'CONCAT(Author.author_name," ",Author.author_lastname)'
	);
		
	public $name = 'Author';
	
}
?>