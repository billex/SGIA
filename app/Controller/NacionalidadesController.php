<?php
App::uses('AppController', 'Controller');
/**
 * Nacionalidades Controller
 *
 * @property Nacionalidade $Nacionalidade
 * @property PaginatorComponent $Paginator
 */
class NacionalidadesController extends AppController {

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
		$this->Nacionalidade->recursive = 0;
		$this->set('nacionalidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nacionalidade->exists($id)) {
			throw new NotFoundException(__('Invalid nacionalidade'));
		}
		$options = array('conditions' => array('Nacionalidade.' . $this->Nacionalidade->primaryKey => $id));
		$this->set('nacionalidade', $this->Nacionalidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nacionalidade->create();
			if ($this->Nacionalidade->save($this->request->data)) {
				$this->Session->setFlash(__('The nacionalidade has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nacionalidade could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Nacionalidade->exists($id)) {
			throw new NotFoundException(__('Invalid nacionalidade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nacionalidade->save($this->request->data)) {
				$this->Session->setFlash(__('The nacionalidade has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nacionalidade could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Nacionalidade.' . $this->Nacionalidade->primaryKey => $id));
			$this->request->data = $this->Nacionalidade->find('first', $options);
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
		$this->Nacionalidade->id = $id;
		if (!$this->Nacionalidade->exists()) {
			throw new NotFoundException(__('Invalid nacionalidade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Nacionalidade->delete()) {
			$this->Session->setFlash(__('The nacionalidade has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The nacionalidade could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
