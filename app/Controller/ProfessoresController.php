<?php
App::uses('AppController', 'Controller');
/**
 * Professores Controller
 *
 * @property Professore $Professore
 * @property PaginatorComponent $Paginator
 */
class ProfessoresController extends AppController {

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
		$this->Professore->recursive = 0;
		$this->set('professores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Professore->exists($id)) {
			throw new NotFoundException(__('Invalid professore'));
		}
		$options = array('conditions' => array('Professore.' . $this->Professore->primaryKey => $id));
		$this->set('professore', $this->Professore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Professore->create();
			if ($this->Professore->save($this->request->data)) {
                            $_SESSION["nomeprofessor"]=  $this->request->data['Professore']['name'];
				$this->Session->setFlash(__('O professor foi registado com sucesso, registe seus dados de acesso.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('plugin'=>'admin', 'controller'=>'users', 'action' => 'addprofessor'));
			} else {
				$this->Session->setFlash(__('Este professor não foi registado. tente novamente.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$disciplinas = $this->Professore->Disciplina->find('list');
		$this->set(compact('disciplinas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Professore->exists($id)) {
			throw new NotFoundException(__('Invalid professore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Professore->save($this->request->data)) {
				$this->Session->setFlash(__('The professore has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The professore could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Professore.' . $this->Professore->primaryKey => $id));
			$this->request->data = $this->Professore->find('first', $options);
		}
		$disciplinas = $this->Professore->Disciplina->find('list');
		$this->set(compact('disciplinas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Professore->id = $id;
		if (!$this->Professore->exists()) {
			throw new NotFoundException(__('Invalid professore'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Professore->delete()) {
			$this->Session->setFlash(__('The professore has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The professore could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
