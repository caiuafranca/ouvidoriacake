<?php
App::uses('AppController', 'Controller');
/**
 * Protocolos Controller
 *
 * @property Protocolo $Protocolo
 * @property PaginatorComponent $Paginator
 */
class ProtocolosController extends AppController {

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
	public function index() {
		$this->Protocolo->recursive = 0;
		$this->set('protocolos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Protocolo->exists($id)) {
			throw new NotFoundException(__('Invalid protocolo'));
		}
		$options = array('conditions' => array('Protocolo.' . $this->Protocolo->primaryKey => $id));
		$this->set('protocolo', $this->Protocolo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Protocolo->create();
			if ($this->Protocolo->save($this->request->data)) {
				$this->Session->setFlash(__('The protocolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The protocolo could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->Protocolo->exists($id)) {
			throw new NotFoundException(__('Invalid protocolo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Protocolo->save($this->request->data)) {
				$this->Session->setFlash(__('The protocolo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The protocolo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Protocolo.' . $this->Protocolo->primaryKey => $id));
			$this->request->data = $this->Protocolo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Protocolo->id = $id;
		if (!$this->Protocolo->exists()) {
			throw new NotFoundException(__('Invalid protocolo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Protocolo->delete()) {
			$this->Session->setFlash(__('The protocolo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The protocolo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
