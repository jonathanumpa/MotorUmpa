<?php

class Sistema_Form_Login extends Zend_Form
{

    public function init()
    {
        $this->setName('login');
        $this->setAttrib('id','login');
        
        $email = new Zend_Form_Element_Text('email_usuario');
        $email->setRequired(true)
                ->setLabel('Email:')
                ->setAttrib('size', '27')
                ->setAttrib('class','required email')
                ->setAttrib('placeholder','tucorreo@dominio.cl')                
                ->addFilter('StripTags')
                ->addValidator('EmailAddress')
                ->addValidator('NotEmpty');      
        
        $clave = new Zend_Form_Element_Password('clave_usuario');
        $clave->setRequired(true)
              ->setLabel('Contraseña:')
              ->setAttrib('size','27')
                ->setAttrib('class','required')
                ->setAttrib('placeholder','****')                
              ->addFilter('StripTags')
              ->addValidator('NotEmpty'); 
        
        $boton = new Zend_Form_Element_Submit('Enviar');
        $boton->setLabel('Ingresar')
              ->setAttrib('class','btn btn-primary btn-large');                

        $this->addElements(array($email,$clave,$boton));         
        
        unset($email,$clave,$boton);
    }
}