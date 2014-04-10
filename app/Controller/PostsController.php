<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
 	public $uses = array('Post', 'Protocolo');
	
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		
		if ($this->request->is('post')) {
			$this->Post->create();
			$this->request->data['Post']['protocolo_id'] = $this->criaProtocolo();			
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		//$protocolos = $this->Post->Protocolo->find('list');
		$tipos = $this->Post->Tipo->find('list');
		$departamentos = $this->Post->Departamento->find('list');
		$tipoUsuarios = $this->Post->TipoUsuario->find('list');
		$this->set(compact('tipos', 'departamentos', 'tipoUsuarios'));
	}
	
	public function criaProtocolo(){
		$this->Protocolo->create();
		$codigoValidacao = uniqid();
		$numeroProtocolo = uniqid();
		$this->Protocolo->save(array('Protocolo'=>array('numero_protocolo'=>$numeroProtocolo,
														'codigo_validacao'=>$codigoValidacao)));
		return $this->Protocolo->getId();	
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$protocolos = $this->Post->Protocolo->find('list');
		$tipos = $this->Post->Tipo->find('list');
		$departamentos = $this->Post->Departamento->find('list');
		$tipoUsuarios = $this->Post->TipoUsuario->find('list');
		$this->set(compact('protocolos', 'tipos', 'departamentos', 'tipoUsuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
