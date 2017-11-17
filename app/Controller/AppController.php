<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    public $theme = "Cakestrap";
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'accueils', 'action' => 'index'),
            'logoutRedirect' => array(
                'controller' => 'accueils',
                'action' => 'index',
                'home'
            ),
            'authenticate' => array('Form' => array('passwordHasher' => 'Blowfish')),
            'authorize' => array('Controller') // Added this line
        )
    );

    public function isAuthorized($user)
    {
        // Admin can access every action

        if (isset($user['role']) && ($user['role'] === 'admin')) {
            return true;
        }

        // Default deny
        return false;
    }

    public function beforeFilter()
    {
        $sess_id = $this->Session->read('Auth.User');

        if ($sess_id['active'] == '0') {
            $this->Session->setFlash(__('<div class="alert alert-warning alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-minus-circle"></i></button>
                  <strong> <i class="fa fa-times fa-3x"></i> </strong>  Unable to connect. Your account is disactivated
                </div>', h("hi"), array('class' => 'errormsg')));
            $this->redirect($this->Auth->logout());
        }
        $this->set('level', '');
        $this->set('title', '');

        $control = $this->request->params['controller'];
        $this->set('control', $control);
        $this->loadModel('HintVideo', 2);
        $videos = $this->HintVideo->find('all', array(
            'conditions' =>
                array('controller' => $control, 'active' => true),
            'recursive' => -1
        ));

        $this->loadModel('HintFaq', 2);
        $fak = $this->HintFaq->find('all', array(
            'conditions' =>
                array('controller' => $control, 'active' => true),
            'recursive' => -1
        ));
        $hint = array(
            'videos' => $videos,
            'faqs' => $fak
        );
        $this->set('hint', $hint);
    }
}
