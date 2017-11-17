<?php

/**
 * @author Webdev tips & tutorials
 * @site www.webdevtito.com
 * @creation-time  11:26
 * @copyright 2/2014
 */
class AccueilsController extends AppController
{
    public $helpers = array('Html', 'Form');


    public function beforeFilter()
    {
        parent::beforeFilter(); //calling parents before filter
    }

    public function isAuthorized($user)
    {
        return parent::isAuthorized($user);
    }

    //listing de la totalite
    public function index()
    {
        $title = "Dashboard";
        $this->set('title', $title);


    }

}

