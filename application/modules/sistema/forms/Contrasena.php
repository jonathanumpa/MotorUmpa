<?php

class Sistema_Form_Contrasena extends Zend_Form
{

    public function init()
    {
        $this->setName('contrasena');
        $this->setAttrib('id','contrasena');
        
        $email = new Zend_Form_Element_Text('email_usuario');
        $email->setRequired(true)
                ->setLabel('Email:')
                ->setAttrib('size', '27')
                ->setAttrib('placeholder','tucorreo@dominio.cl')                   
                ->setAttrib('class','required email')
                ->addFilter('StripTags')
                ->addValidator('EmailAddress')
                ->addValidator('NotEmpty');      
        
        $boton = new Zend_Form_Element_Submit('Enviar');
        $boton->setLabel('Recuperar')
              ->setAttrib('class','btn btn-primary btn-large');                

        $this->addElements(array($email,$boton));         
        
        unset($email,$boton);
    }
}