<?php

class Form_Login extends Zend_Form
{

    public function init()
    {
        $this->setName('usuario');
        
        $email = new Zend_Form_Element_Text('email_usuario');
        $email->setRequired(true)
              ->setLabel('Email:')
              ->addFilter('StripTags')
              ->addValidator('EmailAddress')
              ->addValidator('NotEmpty');      
        
        $clave = new Zend_Form_Element_Password('clave_usuario');
        $clave->setRequired(true)
              ->setLabel('Contraseña:')
              ->setAttrib('size','27')
              ->addFilter('StripTags')
              ->addValidator('NotEmpty'); 
        
        $boton = new Zend_Form_Element_Submit('Enviar');
        $boton->setLabel('Acceder')
              ->setAttrib('class','btn btn-success btn-large');                

        $this->addElements(array($email,$clave,$boton));         
        
        unset($email, $clave, $boton);
    }
}