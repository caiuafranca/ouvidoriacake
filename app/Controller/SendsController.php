<?php
App::uses('AppController', 'Controller');
/**
 * Sends Controller
 *
 * @property Send $Send
 * @property PaginatorComponent $Paginator
 */
class SendsController extends AppController {

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
		$this->Send->recursive = 0;
		$this->set('sends', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Send->exists($id)) {
			throw new NotFoundException(__('Invalid send'));
		}
		$options = array('conditions' => array('Send.' . $this->Send->primaryKey => $id));
		$this->set('send', $this->Send->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Send->create();
			if ($this->Send->save($this->request->data)) {
				$this->Session->setFlash(__('The send has been saved.'), 'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The send could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$protocolos = $this->Send->Protocolo->find('list');
		$this->set(compact('protocolos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Send->exists($id)) {
			throw new NotFoundException(__('Invalid send'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Send->save($this->request->data)) {
				$this->Session->setFlash(__('The send has been saved.'),'flash/success');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The send could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Send.' . $this->Send->primaryKey => $id));
			$this->request->data = $this->Send->find('first', $options);
		}
		$protocolos = $this->Send->Protocolo->find('list');
		$this->set(compact('protocolos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Send->id = $id;
		if (!$this->Send->exists()) {
			throw new NotFoundException(__('Invalid send'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Send->delete()) {
			$this->Session->setFlash(__('The send has been deleted.'), 'flash/success');
		} else {
			$this->Session->setFlash(__('The send could not be deleted. Please, try again.'), 'flash/error');
		}
		return $this->redirect(array('action' => 'index'));
	}}
