<?php
App::uses('AppController', 'Controller');
/**
 * Anos Controller
 *
 * @property Ano $Ano
 * @property PaginatorComponent $Paginator
 */
class AnosController extends AppController {

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
		$this->Ano->recursive = 0;
		$this->set('anos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ano->exists($id)) {
			throw new NotFoundException(__('Invalid ano'));
		}
		$options = array('conditions' => array('Ano.' . $this->Ano->primaryKey => $id));
		$this->set('ano', $this->Ano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ano->create();
			if ($this->Ano->save($this->request->data)) {
				$this->Session->setFlash(__('The ano has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ano could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Ano->exists($id)) {
			throw new NotFoundException(__('Invalid ano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ano->save($this->request->data)) {
				$this->Session->setFlash(__('The ano has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ano could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Ano.' . $this->Ano->primaryKey => $id));
			$this->request->data = $this->Ano->find('first', $options);
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
		$this->Ano->id = $id;
		if (!$this->Ano->exists()) {
			throw new NotFoundException(__('Invalid ano'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ano->delete()) {
			$this->Session->setFlash(__('The ano has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The ano could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
