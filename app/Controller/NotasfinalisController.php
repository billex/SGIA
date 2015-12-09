<?php
App::uses('AppController', 'Controller');
/**
 * Notasfinalis Controller
 *
 * @property Notasfinali $Notasfinali
 * @property PaginatorComponent $Paginator
 */
class NotasfinalisController extends AppController {

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
		$this->Notasfinali->recursive = 0;
		$this->set('notasfinalis', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Notasfinali->exists($id)) {
			throw new NotFoundException(__('Invalid notasfinali'));
		}
		$options = array('conditions' => array('Notasfinali.' . $this->Notasfinali->primaryKey => $id));
		$this->set('notasfinali', $this->Notasfinali->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Notasfinali->create();
			if ($this->Notasfinali->save($this->request->data)) {
				$this->Session->setFlash(__('The notasfinali has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notasfinali could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$disciplinas = $this->Notasfinali->Disciplina->find('list');
		$classas = $this->Notasfinali->Classa->find('list');
		$alunos = $this->Notasfinali->Aluno->find('list');
		$this->set(compact('disciplinas', 'classas', 'alunos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Notasfinali->exists($id)) {
			throw new NotFoundException(__('Invalid notasfinali'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Notasfinali->save($this->request->data)) {
				$this->Session->setFlash(__('The notasfinali has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The notasfinali could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Notasfinali.' . $this->Notasfinali->primaryKey => $id));
			$this->request->data = $this->Notasfinali->find('first', $options);
		}
		$disciplinas = $this->Notasfinali->Disciplina->find('list');
		$classas = $this->Notasfinali->Classa->find('list');
		$alunos = $this->Notasfinali->Aluno->find('list');
		$this->set(compact('disciplinas', 'classas', 'alunos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Notasfinali->id = $id;
		if (!$this->Notasfinali->exists()) {
			throw new NotFoundException(__('Invalid notasfinali'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Notasfinali->delete()) {
			$this->Session->setFlash(__('The notasfinali has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The notasfinali could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
