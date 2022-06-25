<?php

namespace App\Utils;


class View{

    /**
    *  Método responsavel por retornar o conteúdo de uma view
    *  @param string $view
    *  @return string
    */
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/view/'.$view.'.html';

        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
    *  Método responsavel por retornar o conteúdo renderizado de uma view
    *  @param string $view
    *  @param array $vars (string/numeric)
    *  @return string
    */
    public static function render($view, $vars = []){
        // CONTEÚDO DA VIEW
        $contentView = self::getContentView($view);
        // CHAVES DO ARRAYS DE VARIAVEIS
        $keys = array_keys($vars);
        // mapeando os dados
        $keys = array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);

        // RETORNA O CONTEÚDO RENDERIZADO
        //'$keys' = chaves das variaveis, 'array_values($vars)' = valores das variaveis, 'contentView' = conteudo da view
        return str_replace($keys, array_values($vars),$contentView);
    } 


}