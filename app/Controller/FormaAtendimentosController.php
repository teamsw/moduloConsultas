<?php
App::uses('AppController', 'Controller');
/**
 * FormaAtendimentos Controller
 *
 * @property FormaAtendimento $FormaAtendimento
 * @property PaginatorComponent $Paginator
 */
class FormaAtendimentosController extends AppController {

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
		$this->FormaAtendimento->recursive = 0;
		$this->set('formaAtendimentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FormaAtendimento->exists($id)) {
			throw new NotFoundException(__('Invalid forma atendimento'));
		}
		$options = array('conditions' => array('FormaAtendimento.' . $this->FormaAtendimento->primaryKey => $id));
		$this->set('formaAtendimento', $this->FormaAtendimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormaAtendimento->create();
			if ($this->FormaAtendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The forma atendimento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forma atendimento could not be saved. Please, try again.'));
			}
		}
		$consultas = $this->FormaAtendimento->Consulta->find('list');
		$this->set(compact('consultas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FormaAtendimento->exists($id)) {
			throw new NotFoundException(__('Invalid forma atendimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FormaAtendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The forma atendimento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The forma atendimento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FormaAtendimento.' . $this->FormaAtendimento->primaryKey => $id));
			$this->request->data = $this->FormaAtendimento->find('first', $options);
		}
		$consultas = $this->FormaAtendimento->Consulta->find('list');
		$this->set(compact('consultas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FormaAtendimento->id = $id;
		if (!$this->FormaAtendimento->exists()) {
			throw new NotFoundException(__('Invalid forma atendimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FormaAtendimento->delete()) {
			$this->Session->setFlash(__('The forma atendimento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The forma atendimento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
