<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 18-8-2017
 * Time: 23:16
 */
class Comment
{
    public $commentId;
    public $userId;
    public $datum;
    public $tekst;
    public $blogId;
    public $isActive;
    public $titel;

    public function __construct($commentId, $userId, $datum, $tekst, $blogId, $isActive,$titel) {
        $this->commentId = $commentId;
        $this->userId = $userId;
        $this->datum = $datum;
        $this->tekst = $tekst;
        $this->blogId = $blogId;
        $this->isActive = $isActive;
        $this->titel = $titel;
  }
}