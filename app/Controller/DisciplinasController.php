<?php
App::uses('AppController', 'Controller');
/**
 * Disciplinas Controller
 *
 * @property Disciplina $Disciplina
 * @property PaginatorComponent $Paginator
 */
class DisciplinasController extends AppController {

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
		$this->Disciplina->recursive = 0;
		$this->set('disciplinas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Disciplina->exists($id)) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		$options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
		$this->set('disciplina', $this->Disciplina->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disciplina->create();
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplina has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$classas = $this->Disciplina->Classa->find('list');
		$this->set(compact('classas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Disciplina->exists($id)) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Disciplina->save($this->request->data)) {
				$this->Session->setFlash(__('The disciplina has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disciplina could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Disciplina.' . $this->Disciplina->primaryKey => $id));
			$this->request->data = $this->Disciplina->find('first', $options);
		}
		$classas = $this->Disciplina->Classa->find('list');
		$this->set(compact('classas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Disciplina->id = $id;
		if (!$this->Disciplina->exists()) {
			throw new NotFoundException(__('Invalid disciplina'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Disciplina->delete()) {
			$this->Session->setFlash(__('The disciplina has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The disciplina could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
