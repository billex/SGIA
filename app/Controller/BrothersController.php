<?php
App::uses('AppController', 'Controller');
/**
 * Brothers Controller
 *
 * @property Brother $Brother
 * @property PaginatorComponent $Paginator
 */
class BrothersController extends AppController {

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
		$this->Brother->recursive = 0;
		$this->set('brothers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Brother->exists($id)) {
			throw new NotFoundException(__('Invalid brother'));
		}
		$options = array('conditions' => array('Brother.' . $this->Brother->primaryKey => $id));
		$this->set('brother', $this->Brother->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Brother->create();
			if ($this->Brother->save($this->request->data)) {
				$this->Session->setFlash(__('The brother has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brother could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alunos = $this->Brother->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Brother->exists($id)) {
			throw new NotFoundException(__('Invalid brother'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Brother->save($this->request->data)) {
				$this->Session->setFlash(__('The brother has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The brother could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Brother.' . $this->Brother->primaryKey => $id));
			$this->request->data = $this->Brother->find('first', $options);
		}
		$alunos = $this->Brother->Aluno->find('list');
		$this->set(compact('alunos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Brother->id = $id;
		if (!$this->Brother->exists()) {
			throw new NotFoundException(__('Invalid brother'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Brother->delete()) {
			$this->Session->setFlash(__('The brother has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The brother could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
