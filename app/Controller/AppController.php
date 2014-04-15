<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

//	public $components = array('DebugKit.Toolbar');
	
	 public $components = array(
        'Session',
        'Auth' => array(
            'loginAction'=>array(
                'controller'=>'usuarios',
                'action'=>'login'
            ),
            'authenticate'=>array(
                'Form' => array(
                     'userModel'=>'Usuario'
                )
            )
        )
    );
	
	public function beforeRender()
	{
		if ((!empty($this->request->params['prefix'])) and ($this->request->params['prefix'] == 'admin')) 
		{
			$this->theme = 'admin';
		} else {
			
			$this->theme = 'cakestrap';		
		}
		
		if (isset($this->request->data[$this->modelClass])) {
            foreach ($this->request->data[$this->modelClass] as $key => $value) {
                if (($key == 'date' || $key == 'arrival_date' || $key == 'departure_date') && !empty($value)) {
                    $this->request->data[$this->modelClass][$key] = $this->dateFormat($this->request->data[$this->modelClass][$key]);
                }
            }
        }
        parent::beforeRender();			
	}
	
	public function beforeFilter()
	{
		if ((!empty($this->request->params['prefix'])) and ($this->request->params['prefix'] == 'admin')) 
		{
			parent::beforeFilter();
   			$this->Auth->allow('add');
		} else {
			$this->Auth->allow();		
		}
			
	}
   
    function dateFormat($data, $hora = false) {
        if (strpos($data, '-')) {
            $data2 = explode(' ', $data);
            $d = explode("-", $data2[0]);
            $retorno = $d[2] . '/' . $d[1] . '/' . $d[0];
            if ($hora) {
                $retorno .= ' ' . $data2[1];
            }
            return $retorno;
        } else if (strpos($data, '/')) {
            $data2 = explode(' ', $data);
            $d = explode("/", $data2[0]);
            $retorno = $d[2] . '-' . $d[1] . '-' . $d[0];
            if ($hora) {
                $retorno .= ' ' . $data2[1];
            }
            return $retorno;
        }
    }

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$hash = Security::hash($this->data[$this->alias]['password'], 'blowfish');
            $this->data[$this->alias]['password'] = $hash;
		}
		return true;
	}
}
