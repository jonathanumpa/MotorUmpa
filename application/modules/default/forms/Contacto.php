<?php

class Default_Form_Contacto extends Zend_Form
{

    public function init()
    {
        $this->setName('usuario');
        $this->setAttrib('id','formulario-comentario');
        $this->setAttrib('enctype', 'multipart/form-data');
        
        $id_blog = new Zend_Form_Element_Hidden('id_blog');    
        $id_blog->addFilter('Int');
        
        $nombre = new Zend_Form_Element_Text('nombre_comentario');
        $nombre
                ->setRequired(true)
                ->setLabel('Nombre (*):')
                ->setAttrib('size','100')                
                ->setAttrib('class','required');
        
        $email = new Zend_Form_Element_Text('email_comentario');
        $email
                ->setRequired(true)
                ->setLabel('Email (*):')
                ->setAttrib('size','100')                
                ->setAttrib('class','required email');
        
        $contenido = new Zend_Form_Element_Textarea('texto_comentario');
        $contenido
                ->setRequired(true)
                ->setLabel('Comentario:')
                ->setAttrib('rows','10') 
                ->setAttrib('id','editor')                
                ->setAttrib('cols','72')      
                ->setAttrib('rows','5')                 
                ->setAttrib('class','required');        
                       
        $boton = new Zend_Form_Element_Submit('Enviar');
        $boton->setAttrib('class','login')
              ->setLabel('Publicar');

        $this->addElements(array($id_blog,$nombre,$email,$contenido,$boton));         
    }
}
