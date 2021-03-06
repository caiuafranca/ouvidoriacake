<?php
App::uses('AppController', 'Controller');
/**
 * TipoUsuarios Controller
 *
 * @property TipoUsuario $TipoUsuario
 * @property PaginatorComponent $Paginator
 */
class TipoUsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TipoUsuario->recursive = 0;
		$this->set('tipoUsuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->TipoUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid tipo usuario'));
		}
		$options = array('conditions' => array('TipoUsuario.' . $this->TipoUsuario->primaryKey => $id));
		$this->set('tipoUsuario', $this->TipoUsuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoUsuario->create();
			if ($this->TipoUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo usuario has been saved.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo usuario could not be saved. Please, try again.'), 'flash/error');
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
		if (!$this->TipoUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid tipo usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo usuario has been saved.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo usuario could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('TipoUsuario.' . $this->TipoUsuario->primaryKey => $id));
			$this->request->data = $this->TipoUsuario->find('first', $options);
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
		$this->TipoUsuario->id = $id;
		if (!$this->TipoUsuario->exists()) {
			throw new NotFoundException(__('Invalid tipo usuario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoUsuario->delete()) {
			$this->Session->setFlash(__('The tipo usuario has been deleted.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('The tipo usuario could not be deleted. Please, try again.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
