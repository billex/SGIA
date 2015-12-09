<?php
App::uses('AppController', 'Controller');
/**
 * Educacaoanteriores Controller
 *
 * @property Educacaoanteriore $Educacaoanteriore
 * @property PaginatorComponent $Paginator
 */
class EducacaoanterioresController extends AppController {

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
		$this->Educacaoanteriore->recursive = 0;
		$this->set('educacaoanteriores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Educacaoanteriore->exists($id)) {
			throw new NotFoundException(__('Invalid educacaoanteriore'));
		}
		$options = array('conditions' => array('Educacaoanteriore.' . $this->Educacaoanteriore->primaryKey => $id));
		$this->set('educacaoanteriore', $this->Educacaoanteriore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Educacaoanteriore->create();
			if ($this->Educacaoanteriore->save($this->request->data)) {
				$this->Session->setFlash(__('The educacaoanteriore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educacaoanteriore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$alunos = $this->Educacaoanteriore->Aluno->find('list');
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
		if (!$this->Educacaoanteriore->exists($id)) {
			throw new NotFoundException(__('Invalid educacaoanteriore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Educacaoanteriore->save($this->request->data)) {
				$this->Session->setFlash(__('The educacaoanteriore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The educacaoanteriore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Educacaoanteriore.' . $this->Educacaoanteriore->primaryKey => $id));
			$this->request->data = $this->Educacaoanteriore->find('first', $options);
		}
		$alunos = $this->Educacaoanteriore->Aluno->find('list');
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
		$this->Educacaoanteriore->id = $id;
		if (!$this->Educacaoanteriore->exists()) {
			throw new NotFoundException(__('Invalid educacaoanteriore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Educacaoanteriore->delete()) {
			$this->Session->setFlash(__('The educacaoanteriore has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The educacaoanteriore could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
