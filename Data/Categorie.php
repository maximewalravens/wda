<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 12:41
 */
class Categorie
{
    public $categorieId;
    public $naam;
    public $beschrijving;

    public function __construct($categorieId, $naam, $beschrijving) {
        $this->categorieId = $categorieId;
        $this->naam = $naam;
        $this->beschrijving = $beschrijving;
    }
}