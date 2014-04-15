<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator');
	
	function beforeFilter(){
		$this->Auth->allow('add');
		$this->Auth->userModel = "Usuario";
		$this->Auth->fields = array('username'=>'username','password'=>'password');
		}

	public function admin_login() {
		$this->layout = 'login';
				
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->Usuario->set($this->request->data);
			
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());			
			}else{
				$this->Session->setFlash(__('Não Foi Possivel se conectar'), 'flash/error');
			}
		} else {
			$this->Session->setFlash(__('Usuario Não existe'), 'flash/error');
		}
	}

	public function admin_logout() {
		$this->redirect($this->Auth->logout());
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this -> Usuario -> recursive = 0;
		$this -> set('usuarios', $this -> Paginator -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this -> Usuario -> exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$options = array('conditions' => array('Usuario.' . $this -> Usuario -> primaryKey => $id));
		$this -> set('usuario', $this -> Usuario -> find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this -> request -> is('post')) {
			$this -> request -> data['Usuario']['id'] = $this -> Auth -> user('id');
			$this -> Usuario -> create();
			if ($this -> Usuario -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The usuario has been saved.'));
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The usuario could not be saved. Please, try again.'),'flash/success');
			}
		}
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		if (!$this -> Usuario -> exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this -> request -> is(array('post', 'put'))) {
			if ($this -> Usuario -> save($this -> request -> data)) {
				$this -> Session -> setFlash(__('The usuario has been saved.'),'flash/success');
				return $this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The usuario could not be saved. Please, try again.'),'flash/error');
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this -> Usuario -> primaryKey => $id));
			$this -> request -> data = $this -> Usuario -> find('first', $options);
		}
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this -> Usuario -> id = $id;
		if (!$this -> Usuario -> exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this -> request -> onlyAllow('post', 'delete');
		if ($this -> Usuario -> delete()) {
			$this -> Session -> setFlash(__('The usuario has been deleted.'),'flash/success');
		} else {
			$this -> Session -> setFlash(__('The usuario could not be deleted. Please, try again.'),'flash/error');
		}
		return $this -> redirect(array('action' => 'index'));
	}

}
