<?php
App::uses('AppController', 'Controller');

/**
 * HintFaqs Controller
 *
 * @property HintFaq $HintFaq
 * @property PaginatorComponent $Paginator
 */
class HintFaqsController extends AppController
{

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
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->layout = 'config';
        $level_config = 'HintFaq';
        $this->set('level_config', $level_config);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $title = "Hint Faq";
        $this->set('title', $title);
        $this->HintFaq->recursive = 0;
        $this->set('hintFaqs', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null)
    {
        if (!$this->HintFaq->exists($id)) {
            throw new NotFoundException(__('Invalid hint faq'));
        }
        $options = array('conditions' => array('HintFaq.' . $this->HintFaq->primaryKey => $id));
        $this->set('hintFaq', $this->HintFaq->find('first', $options));
    }

    /**
     * preview method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function preview($id = null)
    {
        $this->layout = 'default';

        if (!$this->HintFaq->exists($id)) {
            throw new NotFoundException(__('Invalid hint faq'));
        }
        $options = array('conditions' => array('HintFaq.' . $this->HintFaq->primaryKey => $id));
        $hintFaq = $this->HintFaq->find('first', $options);
        $this->set('hintFaq', $hintFaq);
        $title = $hintFaq['HintFaq']['question'];
        $this->set('title', $title);

    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null)
    {
        $this->loadModel('AdministrationMenu', 2);
        if ($id != null) {

            $a = $this->AdministrationMenu->find('first', array(
                'conditions' =>
                    array('relative_controller' => $id),
                'recursive' => -1
            ));

            if (empty($a)) {
                $newItem = array(
                    'display' => $id,
                    'relative_controller' => $id,
                    'active' => true
                );
                $this->AdministrationMenu->save($newItem);
            }
        }

        $allMenus = $this->AdministrationMenu->find('list', array(
            'fields' =>
                array('relative_controller', 'display'),
            'recursive' => -1
        ));
        $this->set('allMenus', $allMenus);

        if ($this->request->is('post')) {
            $this->HintFaq->create();
            if ($this->HintFaq->save($this->request->data)) {
                $this->Session->setFlash(__('The hint faq has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The hint faq could not be saved. Please, try again.'), 'flash/error');
            }
        }

        $this->set('controller', $id);
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null)
    {
        $this->loadModel('AdministrationMenu', 2);
        $allMenus = $this->AdministrationMenu->find('list', array(
            'fields' =>
                array('relative_controller' ,'display'),
            'recursive' => -1
        ));
        $this->set('allMenus',$allMenus);
        $this->HintFaq->id = $id;
        if (!$this->HintFaq->exists($id)) {
            throw new NotFoundException(__('Invalid hint faq'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->HintFaq->save($this->request->data)) {
                $this->Session->setFlash(__('The hint faq has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The hint faq could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('HintFaq.' . $this->HintFaq->primaryKey => $id));
            $this->request->data = $this->HintFaq->find('first', $options);
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @throws MethodNotAllowedException
     * @param string $id
     * @return void
     */
    public function delete($id = null)
    {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->HintFaq->id = $id;
        if (!$this->HintFaq->exists()) {
            throw new NotFoundException(__('Invalid hint faq'));
        }
        if ($this->HintFaq->delete()) {
            $this->Session->setFlash(__('Hint faq deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Hint faq was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }
}
