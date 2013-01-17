<?php
App::uses('AppModel', 'Model');

class GalleriesModel extends AppModel {
	public $primaryKey = 'gallery_id';
		
	public $name = 'Galleries';
		
	public $hasAndBelongsToMany = array(
		'Authors' =>
			array(
				'className'				 => 'Authors',
				'joinTable'              => 'authors_has_galleries',
                'foreignKey'             => 'user_id',
                'associationForeignKey'  => 'author_id'
             
                
			)
	);
}
