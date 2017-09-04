<!DOCTYPE html>
<html lang="en">


<?php
session_start();
include_once 'Database/CRUD/BlogDb.php';
include_once 'Database/CRUD/BlogDetailDb.php';
include_once 'Database/CRUD/UserDb.php';
include_once 'Database/CRUD/CategorieDb.php';
include_once 'Database/CRUD/FotoDb.php';
include_once 'Database/CRUD/CommentDb.php';

if(isset($_COOKIE["loggedIn"]))
{
    $cookie = $_COOKIE["loggedIn"];
    $user = UserDb::isLoggedIn($cookie);
    if($user != false)
    {
        $_SESSION["userId"] = $user->userId;
    }
}
if(isset($_SESSION["userId"])){
$user = UserDb::getById($_SESSION["userId"]);

    if (!$user->isAdmin)
    {
        header("location: index.php");
}

}
else{
    header("location: index.php");
}


include "include/header.php";  ?>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<body>

<?php include "include/navigation.php"; ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/about-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Admin page</h1>
                    <hr class="small">
                    <span class="subheading">This is what we do.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include "include/loginScreen.php"; ?>
<!-- Main Content -->
<div class="container">
    <div class="row">

        <div class="span6">
            <form id="addCategory" role="form" >
                <h2 class="form-signin-heading">add category</h2>
                <div class="form-group">
                    <input type="text" class="form-control" id="categoryNaam" name="categoryNaam" placeholder="naam" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="categoryBeschrijving" placeholder="Beschrijving" name="categoryBeschrijving" maxlength="100" rows="5" required></textarea>
                </div>
                <button class="btn btn-large btn-primary" type="submit">add</button>
            </form>

        </div>

        <div class="span6">

            <form class="form-signin">
                <h2 class="form-signin-heading">remove Blog</h2>
                <a class="btn btn-large btn-primary"href="deleteBlogs.php">go to blogs<span class="glyphicon glyphicon-chevron-right"></span></a>

            </form>

        </div>

    </div>
</div>

<hr>

<!-- Footer -->
<?php include "include/footer.php";  ?>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/clean-blog.min.js"></script>
<script src="js/scripts.js"></script>

</body>

</html>

