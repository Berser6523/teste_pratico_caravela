<?php

namespace App\Template;
/**
 * Created by PhpStorm.
 * User: Alisson
 * Date: 02/08/2018
 * Time: 08:00
 */
class Fotter implements Template{

    public function render($render = null){
        include_once ($this->setPath($render));
    }

    private function setPath($render){

        $this->path = 'App/Template/layouts/'.$render.'.phtml';

        if($this->fileExists($this->path)){
            return $this->path;
        }

    }

    private function fileExists($file){
        if(file_exists($file)){
            return TRUE;
        }else{
            die('Erro Não foi localizado o arquivo '.$file);
        }
    }
}