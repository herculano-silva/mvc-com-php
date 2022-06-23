<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page{
    /**
    * Método responsável por retornar o conteudo (view) da home
    * @return string
    */
    public static function getHome(){ 
        // VIEW DA HOME
        $content = View::render('pages/home',[
            'name'        => 'Herculano',
            'description' => 'Desenvolvedor de sistemas',
            'site'        => 'www.herculanosilva.com.br' 
        ]);
        // RETORNA A VIEW DA PAGINA 
        return parent::getPage('Herculano - HOME', $content);
    }
}