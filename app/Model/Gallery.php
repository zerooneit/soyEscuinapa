<?php

App::uses('AppModel', 'Model');

class Gallery extends AppModel {
	public $primaryKey = 'gallery_id';
		
	public $name = 'Gallery';
		
	public $hasAndBelongsToMany = array(
		'Author' =>
			array(
				'className'				 => 'Author',
				'joinTable'              => 'authors_has_galleries',
                'foreignKey'             => 'gallery_id',
                'associationForeignKey'  => 'author_id'
             
                
			),
		'Media' =>
			array(
				'className'				 => 'Media',
				'joinTable'              => 'gallery_has_media',
                'foreignKey'             => 'gallery_id',
                'associationForeignKey'  => 'media_id'
             
                
			)
	);
}
