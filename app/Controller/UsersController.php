<?php

// app/Controller/UsersController.php
App::uses('AppController', 'Controller');

class UsersController extends AppController
{
    public $components = array('Captcha', 'Paginator');

    public function beforeFilter()
    {
        parent::beforeFilter();
        $level_config = 'user1';
        $this->set('level_config', $level_config);
        // Allow users to login and logout.
        $this->Auth->allow('login', 'logout');
        $this->layout = 'config';
    }


    public function login()
    {
        $this->layout = 'common';
        $this->loadModel('Configuration', 2);
        $conf = $this->Configuration->find('first', array(
            'fields' => array('admin_display_img', 'admin_main_title', 'admin_sub_title', 'admin_lead_sub_title'),
            'recursive' => -1
        ));
        $this->set('conf', $conf);
        if ($this->request->is('post')) {
            if ($this->Captcha->verify($this->request->data['User']['captchaText'],
                    $this->Session->read('string'))[0] == 1
            ) {
                if ($this->Auth->login()) {


                    $this->redirect($this->Auth->redirectUrl());
                }
                $this->Session->setFlash(__('<div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-minus-circle"></i></button>
                  <strong> <i class="fa fa-thumbs-o-down fa-3x"></i> </strong>  Invalid representant name or password, try again.
                </div>', h("hi"), array('class' => 'errormsg')));
                $captcha = $this->Captcha->getCaptcha();
                $string = implode("", $captcha);
                $this->Session->write('string', $string);
                $this->set(compact('string'));
            } else {
                // display the raw API error
                $this->Session->setFlash('<div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-minus-circle"></i></button>
                  <strong> <i class="fa fa-thumbs-o-down fa-3x"></i> </strong>' . h($this->Captcha->verify($this->request->data['User']['captchaText'],
                        $this->Session->read('string'))[1]) . '
                </div>');
                $captcha = $this->Captcha->getCaptcha();
                $string = implode("", $captcha);
                $this->Session->write('string', $string);
                $this->set(compact('string'));
            }
        } else {
            $captcha = $this->Captcha->getCaptcha();
            $string = implode("", $captcha);
            $this->Session->write('string', $string);
            $this->set(compact('string'));
        }
    }

    public function logout()
    {
        $this->Session->setFlash(__('<div class="alert alert-success alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-minus-circle"></i></button>
                  <strong> <i class="fa fa-thumbs-o-up fa-3x"></i> </strong>  Logout Successful. Come again soon.
                </div>', h("hi"), array('class' => 'errormsg')));
        return $this->redirect($this->Auth->logout());
    }

}