<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $doctypeHelper = new Zend_View_Helper_Doctype();
        $doctypeHelper->doctype('HTML5');
        $doctypeHelper->isHtml5();
    }       
    public function _initAutoLoad(){
        $modulos = new Zend_Application_Module_Autoloader(array(
            'namespace'=>'',
            'basePath'=>APPLICATION_PATH.'/modules/default'
        ));
        return $modulos;
    }
    protected function _initView()
    {
        $vista = new Zend_View();
        /* [META] */    
        $vista->headMeta()
                ->setHttpEquiv('Content-Language', 'es')
                ->setHttpEquiv('Content-Type', 'text/html; charset=UTF-8')
                ->appendName('author', 'Fasedata')
                ->appendName('description','Somos una empresa dedicada al desarrollo de aplicaciones web y sitios web personalizados en Zend Framework')
                ->appendName('keywords','aplicaciones web, desarrollo web, crm personalizados, cms personalizados, sitio web personalizados, zend framework')
                ->appendName('robots','index,follow');
        /* [TITLE] */
        $vista->headTitle('Desarrollo de Aplicaciones Web y Sitios Web personalizados - Fasedata');
        /* [CSS] */
        $vista->headLink()
                ->appendStylesheet('/css/bootstrap-responsive.css')
                ->appendStylesheet('/css/bootstrap.css')
                ->appendStylesheet('/css/estilos.css');
        /* [JS] */
        $vista->headScript()
                ->appendFile('/js/jquery.js')
                ->appendFile('/js/jquery.validate.js')              
                ->appendFile('/js/bootstrap.js')
                ->appendFile('/js/jquery.fasedata.js')
                ;        
        return $vista;
    }    

}

