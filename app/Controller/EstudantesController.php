<?php
App::uses('AppController', 'Controller');
/**
 * Estudantes Controller
 *
 * @property Estudante $Estudante
 * @property PaginatorComponent $Paginator
 */
class EstudantesController extends AppController {

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
		$this->Estudante->recursive = 0;
		$this->set('estudantes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Estudante->exists($id)) {
			throw new NotFoundException(__('Invalid estudante'));
		}
		$options = array('conditions' => array('Estudante.' . $this->Estudante->primaryKey => $id));
		$this->set('estudante', $this->Estudante->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Estudante->create();
			if ($this->Estudante->save($this->request->data)) {
				$this->Session->setFlash(__('The estudante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudante could not be saved. Please, try again.'));
			}
		}
		$genros = $this->Estudante->Genro->find('list');
		$nacionalidades = $this->Estudante->Nacionalidade->find('list');
		$this->set(compact('genros', 'nacionalidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Estudante->exists($id)) {
			throw new NotFoundException(__('Invalid estudante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Estudante->save($this->request->data)) {
				$this->Session->setFlash(__('The estudante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Estudante.' . $this->Estudante->primaryKey => $id));
			$this->request->data = $this->Estudante->find('first', $options);
		}
		$genros = $this->Estudante->Genro->find('list');
		$nacionalidades = $this->Estudante->Nacionalidade->find('list');
		$this->set(compact('genros', 'nacionalidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Estudante->id = $id;
		if (!$this->Estudante->exists()) {
			throw new NotFoundException(__('Invalid estudante'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Estudante->delete()) {
			$this->Session->setFlash(__('The estudante has been deleted.'));
		} else {
			$this->Session->setFlash(__('The estudante could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
