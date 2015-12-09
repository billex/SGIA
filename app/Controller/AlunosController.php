<?php
App::uses('AppController', 'Controller');
/**
 * Alunos Controller
 *
 * @property Aluno $Aluno
 * @property PaginatorComponent $Paginator
 */
class AlunosController extends AppController {

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
		$this->Aluno->recursive = 0;
		$this->set('alunos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aluno->exists($id)) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		$options = array('conditions' => array('Aluno.' . $this->Aluno->primaryKey => $id));
		$this->set('aluno', $this->Aluno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aluno->create();
			if ($this->Aluno->save($this->request->data)) {
                            $_SESSION["nomealuno"] = $this->request->data['Aluno']['name'];
				$this->Session->setFlash(__('The aluno has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('plugin'=>null, 'controller'=>'encaregados','action' => 'add'));
			} else {
				$this->Session->setFlash(__('The aluno could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$generos = $this->Aluno->Genero->find('list');
		$nacionalidades = $this->Aluno->Nacionalidade->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$this->set(compact('generos', 'nacionalidades', 'documentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Aluno->exists($id)) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash(__('The aluno has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aluno could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Aluno.' . $this->Aluno->primaryKey => $id));
			$this->request->data = $this->Aluno->find('first', $options);
		}
		$generos = $this->Aluno->Genero->find('list');
		$nacionalidades = $this->Aluno->Nacionalidade->find('list');
		$documentos = $this->Aluno->Documento->find('list');
		$this->set(compact('generos', 'nacionalidades', 'documentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Aluno->id = $id;
		if (!$this->Aluno->exists()) {
			throw new NotFoundException(__('Invalid aluno'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aluno->delete()) {
			$this->Session->setFlash(__('The aluno has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The aluno could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}