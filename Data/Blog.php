<?php

/**
 * Created by PhpStorm.
 * User: max
 * Date: 8-8-2017
 * Time: 11:23
 */
class Blog
{
    public $blogId;
    public $titel;
    public $datum;
    public $isDeleted;
    public $userId;
    public $categorieId;
    public $totalComments;

    public function __construct($blogId, $titel, $datum, $isDeleted, $userId, $categorieID, $totalComments) {
        $this->blogId = $blogId;
        $this->titel = $titel;
        $this->datum = $datum;
        $this->isDeleted = $isDeleted;
        $this->userId = $userId;
        $this->categorieId = $categorieID;
        $this->totalComments = $totalComments;
    }
}