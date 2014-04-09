<?php
App::uses('AppModel', 'Model');
/**
 * Protocolo Model
 *
 * @property Post $Post
 * @property Send $Send
 */
class Protocolo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 * 
 */
 	public $displayField = 'numero_protocolo';
 
	public $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'protocolo_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Send' => array(
			'className' => 'Send',
			'foreignKey' => 'protocolo_id',
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
