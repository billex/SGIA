<?php
App::uses('AppController', 'Controller');
/**
 * Saudes Controller
 *
 * @property Saude $Saude
 * @property PaginatorComponent $Paginator
 */
class SaudesController extends AppController {

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
		$this->Saude->recursive = 0;
		$this->set('saudes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Saude->exists($id)) {
			throw new NotFoundException(__('Invalid saude'));
		}
		$options = array('conditions' => array('Saude.' . $this->Saude->primaryKey => $id));
		$this->set('saude', $this->Saude->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Saude->create();
			if ($this->Saude->save($this->request->data)) {
				$this->Session->setFlash(__('The saude has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The saude could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Saude->exists($id)) {
			throw new NotFoundException(__('Invalid saude'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Saude->save($this->request->data)) {
				$this->Session->setFlash(__('The saude has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The saude could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Saude.' . $this->Saude->primaryKey => $id));
			$this->request->data = $this->Saude->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Saude->id = $id;
		if (!$this->Saude->exists()) {
			throw new NotFoundException(__('Invalid saude'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Saude->delete()) {
			$this->Session->setFlash(__('The saude has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The saude could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
