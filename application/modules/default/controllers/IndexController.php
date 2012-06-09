<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
		$contacto = new Default_Form_Contacto();
		
		$this->view->contacto = $contacto;
    }
    
    public function loginAction()
    {
        #formulario
        $formulario = new Form_Login();
        
        #request
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            if($formulario->isValid($request->getPost()))
            {
                $values = $formulario->getValues();
                
                #adaptador de autenticación
                $authAdapter = new Zend_Auth_Adapter_DbTable(Zend_Db_Table::getDefaultAdapter());
                $authAdapter ->setTableName('usuario')
                             ->setIdentityColumn('email_usuario')
                             ->setCredentialColumn('clave_usuario')
                             ->setIdentity($values['email_usuario'])
                             ->setCredential($values['clave_usuario']);
                
                $auth = Zend_Auth::getInstance();
                $result = $auth->authenticate($authAdapter);
                 
                #validación
                if ($result->isValid())
                {
                    $identity = $authAdapter->getResultRowObject();

                    $authStorage = $auth->getStorage();
                    $authStorage->write($identity);
                    
                    $this->_redirect('/index/');
                }
                else
                {
                    switch($result->getCode())
                    {
                        case Zend_Auth_Result::FAILURE_IDENTITY_NOT_FOUND:
                            $this->view->FAILURE_IDENTITY_NOT_FOUND = true;
                            break;
                        case Zend_Auth_Result::FAILURE_CREDENTIAL_INVALID:
                            $this->view->FAILURE_CREDENTIAL_INVALID = true;
                            break;
                    }
                }
            }
            else
            {
                $formulario->populate($request->getPost());
                $this->view->WARNING = true;
            }
        }
        
        #vistas
        $this->view->formulario = $formulario;
        
        #limpieza
        unset($formulario, $request);
    }
}

