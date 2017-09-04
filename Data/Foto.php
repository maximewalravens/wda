<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 9-8-2017
 * Time: 15:49
 */
class Foto
{
    public $fotoId;
    public $blogId;
    public $naam;
    public $userId;

    public function __construct($fotoId,$blogId, $naam,$userId) {
        $this->blogId = $blogId;
        $this->fotoId = $fotoId;
        if($naam == "http://placehold.it/900x300")
        {
            $this->naam = $naam;
        }
        else
        {
            $this->naam = 'img/'.$naam;
        }

    }
}