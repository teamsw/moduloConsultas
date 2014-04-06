<?php
App::uses('AppController', 'Controller');
/**
 * TipoAtendimentos Controller
 *
 * @property TipoAtendimento $TipoAtendimento
 * @property PaginatorComponent $Paginator
 */
class TipoAtendimentosController extends AppController {

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
		$this->TipoAtendimento->recursive = 0;
		$this->set('tipoAtendimentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TipoAtendimento->exists($id)) {
			throw new NotFoundException(__('Invalid tipo atendimento'));
		}
		$options = array('conditions' => array('TipoAtendimento.' . $this->TipoAtendimento->primaryKey => $id));
		$this->set('tipoAtendimento', $this->TipoAtendimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TipoAtendimento->create();
			if ($this->TipoAtendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo atendimento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo atendimento could not be saved. Please, try again.'));
			}
		}
		$consultas = $this->TipoAtendimento->Consulta->find('list');
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
		if (!$this->TipoAtendimento->exists($id)) {
			throw new NotFoundException(__('Invalid tipo atendimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoAtendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo atendimento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo atendimento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoAtendimento.' . $this->TipoAtendimento->primaryKey => $id));
			$this->request->data = $this->TipoAtendimento->find('first', $options);
		}
		$consultas = $this->TipoAtendimento->Consulta->find('list');
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
		$this->TipoAtendimento->id = $id;
		if (!$this->TipoAtendimento->exists()) {
			throw new NotFoundException(__('Invalid tipo atendimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TipoAtendimento->delete()) {
			$this->Session->setFlash(__('The tipo atendimento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tipo atendimento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
