<?php
App::uses('AppModel', 'Model');

class AuthorsModel extends AppModel {
	public $primaryKey = 'author_id';
		
	public $name = 'Authors';
	
	public $hasAndBelongsToMany = array(
		'Galleries' =>
			array(
				'className'				 => 'Galleries',
				'joinTable'              => 'authors_has_galleries',
                'foreignKey'             => 'author_id',
                'associationForeignKey'  => 'gallery_id'
               
                
			)
	);
}
?>