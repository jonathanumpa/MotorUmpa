<?php

class Sistema_TableroController extends Zend_Controller_Action
{

    public function init()
    {
        /* [SET LAYOUT] */
        $this->_helper->layout->setLayout('interior');
    }

    public function indexAction()
    {
        /* [TITLE] */
        $this->view->headTitle()->prepend('Tablero - ');
    }
}