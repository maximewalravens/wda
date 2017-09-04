<!DOCTYPE html>
<html lang="en">
<!-- de template is van bootstrap alle php requirements heb ik zelf geprogrammeerd.-->


<?php
 if(!isset($_SESSION["userId"]))
 {
     header("index.php");
 }
session_start();
include "include/header.php";  ?>

<body>

<!-- Navigation -->
<?php include "include/navigation.php"; ?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>Jane</h1>
                    <hr class="small">
                    <span class="subheading">A simple blog</span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include "include/loginScreen.php"; ?>
<!-- Main Content -->

<div class="container">
        <div class="form-area">

            <form role="form" action="addBlog.php" method="post" enctype="multipart/form-data" id="blogForm">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Add your Post</h3>
                <div class="form-group">
                        <select class="form-control filter" id="blogCategorie" name="blogCategorie">
                            <?php foreach (CategorieDb::getAll() as $categorie):?>
                                <option value="<?php echo $categorie->categorieId ?>"><?php echo $categorie->naam?></option>
                            <?php endforeach;?>
                        </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Kies een afbeelding</label>
                    <input id="bestand" name="bestand" type="file" class="file" accept="jpg, jpeg, png">
                </div>
                    <div class="form-group">
                    <input type="text" class="form-control" id="blogTitel" name="blogTitel" placeholder="Titel" required>
                </div>
    <div class="form-group">
        <input type="text" class="form-control" id="blogBeschrijving" name="blogBeschrijving" placeholder="beschrijving" required>
    </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="blogTekst" placeholder="Message" name="blogTekst" maxlength="1000" rows="25"></textarea>
                </div>
                <input type="hidden" id="userId" name="userId" value="<?php echo $_SESSION["userId"]?>">
                <input type="hidden" id="blogDatum" name="blogDatum" value="<?php echo date('Y-m-d') ?>">

                <button type="submit" id="submitBlog" name="submit" class="btn btn-primary pull-right">Submit Blog</button>
            </form>
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

