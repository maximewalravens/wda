<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 12:38
 */
class BlogDetail
{
    public $blogDetailId;
    public $blogId;
    public $tekst;
    public $beschrijving;

    public function __construct($blogDetailId, $blogId, $tekst, $beschrijving) {
        $this->blogDetailId = $blogDetailId;
        $this->blogId = $blogId;
        $this->tekst = $tekst;
        $this->beschrijving = $beschrijving;
    }
}