<?php
App::uses('AppModel', 'Model');
/**
 * TipoUsuario Model
 *
 * @property Post $Post
 */
class TipoUsuario extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
    public $displayField= 'nome';
	
	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'tipo_usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
