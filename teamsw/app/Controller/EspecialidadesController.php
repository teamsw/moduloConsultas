<?php
App::uses('AppController', 'Controller');
/**
 * Especialidades Controller
 *
 * @property Especialidade $Especialidade
 * @property PaginatorComponent $Paginator
 */
class EspecialidadesController extends AppController {

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
		$this->Especialidade->recursive = 0;
		$this->set('especialidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Especialidade->exists($id)) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		$options = array('conditions' => array('Especialidade.' . $this->Especialidade->primaryKey => $id));
		$this->set('especialidade', $this->Especialidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Especialidade->create();
			if ($this->Especialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The especialidade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidade could not be saved. Please, try again.'));
			}
		}
		$pessoas = $this->Especialidade->Pessoa->find('list');
		$consultas = $this->Especialidade->Consulta->find('list');
		$this->set(compact('pessoas', 'consultas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Especialidade->exists($id)) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Especialidade->save($this->request->data)) {
				$this->Session->setFlash(__('The especialidade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Especialidade.' . $this->Especialidade->primaryKey => $id));
			$this->request->data = $this->Especialidade->find('first', $options);
		}
		$pessoas = $this->Especialidade->Pessoa->find('list');
		$consultas = $this->Especialidade->Consulta->find('list');
		$this->set(compact('pessoas', 'consultas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Especialidade->id = $id;
		if (!$this->Especialidade->exists()) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Especialidade->delete()) {
			$this->Session->setFlash(__('The especialidade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The especialidade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
