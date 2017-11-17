<?php

/**
 * @author Webdev tips & tutorials
 * @site www.webdevtito.com
 * @creation-time  11:26
 * @copyright 2/2014
 */

class ConfigurationsController extends AppController
{
    public $helpers = array('Html', 'Form');

    public function beforeFilter()
    {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->layout = 'config';
    }

    //editing invoiceActions
    public function index()
    {
        $level_config = 'conf1';
        $this->set('level_config', $level_config);

        $title = "General configuration";
        $this->set('title', $title);

        $configuration = $this->Configuration->find('first');
        $this->set('configuration', $configuration);
        if ($this->request->is(array('post', 'put'))) {

            if ($this->Configuration->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-minus-circle"></i></button>
  <strong> <i class="fa fa-thumbs-o-up fa-3x"></i> </strong>  Update successful.
</div>', h("hi"), array('class' => 'errormsg')));
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-minus-circle"></i></button>
  <strong> <i class="fa fa-thumbs-o-down fa-3x"></i> </strong>  An error occured!
</div>', h("hi"), array('class' => 'errormsg')));
        }
        if (!$this->request->data) {
            $this->request->data = $configuration;
        }
    }
}