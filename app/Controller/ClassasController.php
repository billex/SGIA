<?php
App::uses('AppController', 'Controller');
/**
 * Classas Controller
 *
 * @property Classa $Classa
 * @property PaginatorComponent $Paginator
 */
class ClassasController extends AppController {

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
		$this->Classa->recursive = 0;
		$this->set('classas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Classa->exists($id)) {
			throw new NotFoundException(__('Invalid classa'));
		}
		$options = array('conditions' => array('Classa.' . $this->Classa->primaryKey => $id));
		$this->set('classa', $this->Classa->find('first', $options));
	}
	public function lancarnota($id = null) {
		if (!$this->Classa->exists($id)) {
			throw new NotFoundException(__('Invalid classa'));
		}
		$options = array('conditions' => array('Classa.' . $this->Classa->primaryKey => $id));
		$this->set('classa', $this->Classa->find('first', $options));
	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Classa->create();
			if ($this->Classa->save($this->request->data)) {
				$this->Session->setFlash(__('The classa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$anos = $this->Classa->Ano->find('list');
		$this->set(compact('anos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Classa->exists($id)) {
			throw new NotFoundException(__('Invalid classa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Classa->save($this->request->data)) {
				$this->Session->setFlash(__('The classa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The classa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Classa.' . $this->Classa->primaryKey => $id));
			$this->request->data = $this->Classa->find('first', $options);
		}
		$anos = $this->Classa->Ano->find('list');
		$this->set(compact('anos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Classa->id = $id;
		if (!$this->Classa->exists()) {
			throw new NotFoundException(__('Invalid classa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Classa->delete()) {
			$this->Session->setFlash(__('The classa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The classa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
