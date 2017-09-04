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


if(!isset($_GET["id"]) || !$blog = BlogDb::getById($_GET["id"])) {
header("location: index.php");
}
else
{
    $blogDetail = BlogDetailDb::getByBlogId($blog->blogId);
    $user = UserDb::getById($blog->userId);
    $foto = FotoDb::getById($blog->blogId);
    $categorie = CategorieDb::getById($blog->categorieId);
    $comments = CommentDb::getAll($_GET["id"]);
}
?>

<?php include "include/header.php";  ?>

<body>

<?php include "include/navigation.php"; ?>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $foto->naam;?>')">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $blog->titel;?></h1>
                        <h2 class="subheading"><?php echo $blogDetail->beschrijving;?></h2>
                        <span class="meta">Posted by <a href="#userId=<?php echo $blog->userId?>"><?php echo $user->username?></a> at <?php echo date_format(date_create($blog->datum), 'g:ia \o\n l jS F Y');?></span>
                        <span class="meta">Category:  <a href="blogs.php?categoryId=<?php echo $blog->categorieId?>"><?php echo $categorie->naam?></a></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php include "include/loginScreen.php"; ?>
    <!-- Post Content -->

        <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <div class="post-preview">
                    <p><?php echo($blogDetail->tekst); ?></p>
                    </div>


            </div>
            <div class="col-md-4">

                <div class="well">
                    <h4><?php echo $categorie->naam;?> Blogs</h4>
                    <ul class="list-styled">
                        <?php foreach (BlogDb::relevanteBlogs($blog->blogId,$blog->categorieId) as $blog): ?>
                            <li><a href="post.php?id=<?php echo $blog->blogId;?>"><?php echo $blog->titel;?></a>
                            </li>
                        <?php endforeach;?>

                    </ul> </div>

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
<!-- sidebar -->

    <!-- comments -->

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1" id="logout">
                <div class="page-header">
                    <h3 class="reviews">Leave your comment</h3>
                </div>
                <div class="comment-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                        <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="comments-logout">
                            <ul class="media-list">
    <?php include "deComments.php"?>
                                        </ul>
                                    </div>




                        <div class="tab-pane" id="add-comment">
                        <?php if(isset($_SESSION['userId']))
                        {
                        include "include/comments.php";
                        }
                        else
                        {
                        include "include/disabledComments.php";
                        }
                            ?>
                        </div>
                        </div>
                </div>
            </div>
            </div>


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
