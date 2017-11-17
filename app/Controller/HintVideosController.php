<?php
App::uses('AppController', 'Controller');

/**
 * HintVideos Controller
 * @author Jaouher Kharrat
 * @property HintVideo $HintVideo
 * @property PaginatorComponent $Paginator
 */
class HintVideosController extends AppController
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
        $level_config = 'HintVideo';
        $this->set('level_config', $level_config);
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $title = "Hint Video";
        $this->set('title', $title);
        $this->HintVideo->recursive = 0;
        $this->set('hintVideos', $this->paginate());
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
        if (!$this->HintVideo->exists($id)) {
            throw new NotFoundException(__('Invalid hint video'));
        }
        $options = array('conditions' => array('HintVideo.' . $this->HintVideo->primaryKey => $id));
        $this->set('hintVideo', $this->HintVideo->find('first', $options));
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
                $newItem= array(
                    'display' => $id,
                    'relative_controller' => $id,
                    'active' => true
                );
                $this->AdministrationMenu->save($newItem);
            }
        }

        $allMenus = $this->AdministrationMenu->find('list', array(
            'fields' =>
                array('relative_controller' ,'display'),
            'recursive' => -1
        ));
        $this->set('allMenus',$allMenus);

        if ($this->request->is('post')) {
            $this->HintVideo->create();
            if ($this->HintVideo->save($this->request->data)) {
                $this->Session->setFlash(__('The hint video has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The hint video could not be saved. Please, try again.'), 'flash/error');
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
        $this->HintVideo->id = $id;
        if (!$this->HintVideo->exists($id)) {
            throw new NotFoundException(__('Invalid hint video'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->HintVideo->save($this->request->data)) {
                $this->Session->setFlash(__('The hint video has been saved'), 'flash/success');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The hint video could not be saved. Please, try again.'), 'flash/error');
            }
        } else {
            $options = array('conditions' => array('HintVideo.' . $this->HintVideo->primaryKey => $id));
            $this->request->data = $this->HintVideo->find('first', $options);
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
        $this->HintVideo->id = $id;
        if (!$this->HintVideo->exists()) {
            throw new NotFoundException(__('Invalid hint video'));
        }
        if ($this->HintVideo->delete()) {
            $this->Session->setFlash(__('Hint video deleted'), 'flash/success');
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Hint video was not deleted'), 'flash/error');
        $this->redirect(array('action' => 'index'));
    }
}
