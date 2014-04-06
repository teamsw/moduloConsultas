<?php
App::uses('AppController', 'Controller');
/**
 * Dependentes Controller
 *
 * @property Dependente $Dependente
 * @property PaginatorComponent $Paginator
 */
class DependentesController extends AppController {

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
		$this->Dependente->recursive = 0;
		$this->set('dependentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dependente->exists($id)) {
			throw new NotFoundException(__('Invalid dependente'));
		}
		$options = array('conditions' => array('Dependente.' . $this->Dependente->primaryKey => $id));
		$this->set('dependente', $this->Dependente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dependente->create();
			if ($this->Dependente->saveAll($this->request->data)) {
				$this->loadModel('Pessoa');
				$this->loadModel('User');

				$this->Session->setFlash(__('The dependente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependente could not be saved. Please, try again.'));
			}
		}
		$clientes = $this->Dependente->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dependente->exists($id)) {
			throw new NotFoundException(__('Invalid dependente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dependente->save($this->request->data)) {
				$this->Session->setFlash(__('The dependente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dependente.' . $this->Dependente->primaryKey => $id));
			$this->request->data = $this->Dependente->find('first', $options);
		}
		$clientes = $this->Dependente->Cliente->find('list');
		$this->set(compact('clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dependente->id = $id;
		if (!$this->Dependente->exists()) {
			throw new NotFoundException(__('Invalid dependente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dependente->delete()) {
			$this->Session->setFlash(__('The dependente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dependente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
