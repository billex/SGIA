<?php
App::uses('AppController', 'Controller');
/**
 * Pauts Controller
 *
 * @property Paut $Paut
 * @property PaginatorComponent $Paginator
 */
class PautsController extends AppController {

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
		$this->Paut->recursive = 0;
		$this->set('pauts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paut->exists($id)) {
			throw new NotFoundException(__('Invalid paut'));
		}
		$options = array('conditions' => array('Paut.' . $this->Paut->primaryKey => $id));
		$this->set('paut', $this->Paut->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paut->create();
			if ($this->Paut->save($this->request->data)) {
				$this->Session->setFlash(__('The paut has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paut could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$classas = $this->Paut->Classa->find('list');
		$alunos = $this->Paut->Aluno->find('list');
		$disciplinas = $this->Paut->Disciplina->find('list');
		$anos = $this->Paut->Ano->find('list');
		$this->set(compact('classas', 'alunos', 'disciplinas', 'anos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Paut->exists($id)) {
			throw new NotFoundException(__('Invalid paut'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paut->save($this->request->data)) {
				$this->Session->setFlash(__('The paut has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paut could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Paut.' . $this->Paut->primaryKey => $id));
			$this->request->data = $this->Paut->find('first', $options);
		}
		$classas = $this->Paut->Classa->find('list');
		$alunos = $this->Paut->Aluno->find('list');
		$disciplinas = $this->Paut->Disciplina->find('list');
		$anos = $this->Paut->Ano->find('list');
		$this->set(compact('classas', 'alunos', 'disciplinas', 'anos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Paut->id = $id;
		if (!$this->Paut->exists()) {
			throw new NotFoundException(__('Invalid paut'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Paut->delete()) {
			$this->Session->setFlash(__('The paut has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The paut could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
