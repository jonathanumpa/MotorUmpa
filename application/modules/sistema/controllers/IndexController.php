<?php

class Sistema_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        /* [SET LAYOUT] */
        $this->_helper->layout->setLayout('login');
        /* [TITLE] */
        $this->view->headTitle()->prepend('Bienvenidos - ');     
        /* [FORMULARIO] */
        $this->view->formulario = new Sistema_Form_Login();
    }
    public function contrasenaAction(){
        /* [SET LAYOUT] */
        $this->_helper->layout->setLayout('login');
        /* [TITLE] */
        $this->view->headTitle()->prepend('¿Olvidaste la contraseña? - ');     
        /* [FORMULARIO] */
        $this->view->formulario = new Sistema_Form_Contrasena();
    }
}

