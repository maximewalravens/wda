<!DOCTYPE html>
<?php
session_start();
include_once 'Database/CRUD/BlogDb.php';


if(isset($_GET["type"]) || isset($_GET["month"])) {


        $categorie = isset($_GET["type"]) ? $_GET["type"] : "";
        $month = isset($_GET["month"]) ? $_GET["month"] : "";
        $blogs = BlogDb::getFiltered($categorie,$month);


} else {

    $blogs = BlogDb::getAll();
}

?>
<html lang="en">


<?php include "include/header.php";  ?>

<body>

<!-- Navigation -->
<?php include "include/navigation.php"; ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('img/blogs.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <h1>Blogs</h1>
                    <hr class="small">
                    <span class="subheading">These are all my adventures.</span>
                </div>
            </div>
        </div>
    </div>
</header>    <!-- Page Content -->
<!--login-->
<?php include "include/loginScreen.php"; ?>
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8" id="blogs">
                  <?php
                  include "deBlogs.php";?>
                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <div class="well">
                    <h4>Top Blogs</h4>
                    <ol class="list-styled">
                        <?php foreach (BlogDb::getHot() as $blog): ?>
                        <li><a href="post.php?id=<?php echo $blog->blogId;?>"><?php echo $blog->titel;?></a>
                        </li>
                        <?php endforeach;?>

                    </ol> </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">

                        <div class="col-lg-5">
                            <select class="form-control filter" id="filter" name="type">
                                <option value="">all</option>
                                <?php foreach (CategorieDb::getAll() as $categorie):?>
                                        <option value="<?php echo $categorie->categorieId ?>"><?php echo $categorie->naam?></option>
                                <?php endforeach;?>
                            </select>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <div class="well">
                    <h4>Blog Months</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li value="1" class="maand"><a>January</a>
                                </li>
                                <li value="2" class="maand"><a>February</a>
                                </li>
                                <li value="3" class="maand"><a>Mars</a>
                                </li>
                                <li value="4" class="maand"><a>April</a>
                                </li>
                                <li value="5" class="maand"><a>May</a>
                                </li>
                                <li value="6" class="maand"><a>June</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li value="7" class="maand"><a>July</a>
                                </li>
                                <li value="8" class="maand"><a>August</a>
                                </li>
                                <li value="9" class="maand"><a>September</a>
                                </li>
                                <li value="10" class="maand"><a>October</a>
                                </li>
                                <li value="11" class="maand"><a>November</a>
                                </li>
                                <li value="12" class="maand"><a>December</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include "include/footer.php";  ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>

</html>


