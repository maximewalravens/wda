<?php
session_start();
session_destroy();
setcookie("loggedIn","",time()-3600);
header("Location:index.php");
/**
 * Created by PhpStorm.
 * User: max
 * Date: 14-8-2017
 * Time: 18:01
 */