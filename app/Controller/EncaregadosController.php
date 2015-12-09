<?php
App::uses('AppController', 'Controller');
/**
 * Encaregados Controller
 *
 * @property Encaregado $Encaregado
 * @property PaginatorComponent $Paginator
 */
class EncaregadosController extends AppController {

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
		$this->Encaregado->recursive = 0;
		$this->set('encaregados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Encaregado->exists($id)) {
			throw new NotFoundException(__('Invalid encaregado'));
		}
		$options = array('conditions' => array('Encaregado.' . $this->Encaregado->primaryKey => $id));
		$this->set('encaregado', $this->Encaregado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Encaregado->create();
			if ($this->Encaregado->save($this->request->data)) {
				$this->Session->setFlash(__('The encaregado has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encaregado could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$documentos = $this->Encaregado->Documento->find('list');
		$this->set(compact('documentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Encaregado->exists($id)) {
			throw new NotFoundException(__('Invalid encaregado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Encaregado->save($this->request->data)) {
				$this->Session->setFlash(__('The encaregado has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The encaregado could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Encaregado.' . $this->Encaregado->primaryKey => $id));
			$this->request->data = $this->Encaregado->find('first', $options);
		}
		$alunos = $this->Encaregado->Aluno->find('list');
		$documentos = $this->Encaregado->Documento->find('list');
		$this->set(compact('alunos', 'documentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Encaregado->id = $id;
		if (!$this->Encaregado->exists()) {
			throw new NotFoundException(__('Invalid encaregado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Encaregado->delete()) {
			$this->Session->setFlash(__('The encaregado has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The encaregado could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
