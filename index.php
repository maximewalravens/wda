<!DOCTYPE html>
<html lang="en">
<!-- de template is van bootstrap alle php requirements heb ik zelf geprogrammeerd.-->


<?php

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
        <div class="page-header">
          <!--  <h3>Add the (.grid-divider) class to any row to separate grid columns with equal height lines.</h3> -->
        </div>
        <div class="row grid-divider">
            <div class="col-sm-4">
                <div class="col-padding">
                    <h3>Hot <b>blogs</b></h3>

                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <?php foreach(BlogDb::getHot() as $blog): ?>
                            <div class="post-preview">
                                <a href="post.php?id=<?php echo $blog->blogId?>">
                                    <?php $blogDetail = BlogDetailDb::getByBlogId($blog->blogId);
                                        $user = UserDb::getById($blog->userId);
                                    $foto = FotoDb::getById($blog->blogId);
                                        $categorie = CategorieDb::getById($blog->categorieId);
                                    ?>
                                    <h2 class="post-title">
                                            <?php echo $blog->titel?>
                                    </h2>
                                    <img class="img img-responsive article-img" src="<?php echo $foto->naam;?>">
                                    <h3 class="post-subtitle">
                                     <?php echo $blogDetail->beschrijving;?>
                                    </h3>
                                </a>

                                <p class="post-meta">Posted by <a href="#userId=<?php echo $blog->userId?>"><?php echo $user->username?></a> at <?php echo date_format(date_create($blog->datum), 'g:ia \o\n l jS F Y');?></p>
                                <p class="post-meta">Category <a href="blogs.php?categoryId=<?php echo $blog->categorieId?>"><?php echo $categorie->naam?></a></p>

                                <div class="comments"><a href="#"><?php echo $blog->totalComments?><i class="fa fa-comments fa-lg"></i></a></div>
                            </div>
                            <?php endforeach;?>

                            <hr>
                        <!--    <div class="post-preview">
                                <a href="post.php">
                                    <h2 class="post-title">
                                        Science has not yet mastered prophecy
                                    </h2>
                                    <img class="img img-responsive article-img" src="http://farm1.staticflickr.com/510/18737505996_98a20bf592_k.jpg">
                                    <h3 class="post-subtitle">
                                        We predict too much for the next year and yet far too little for the next ten.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                                <div class="comments"><a href="#"><i class="fa fa-comments fa-lg"></i></a></div>
                            </div>
                            <hr>
                            <div class="post-preview">
                                <a href="post.php">
                                    <h2 class="post-title">
                                        Failure is not an option
                                    </h2>
                                    <img class="img img-responsive article-img" src="http://farm1.staticflickr.com/258/18511405422_d7c67c0ff8_k.jpg">
                                    <h3 class="post-subtitle">
                                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                                <div class="comments"><a href="#"><i class="fa fa-comments fa-lg"></i></a></div>
                            </div>
                            <hr>-->
                            <!-- Pager -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-padding">
<!-- design -->
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="col-padding">
                    <h3><b>blogs of </b><?php echo date('F');?></h3>
                    <div class="row">

                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <?php foreach(BlogDb::getRandom() as $blog): ?>
                                <div class="post-preview">
                                    <a href="post.php?id=<?php echo $blog->blogId?>">
                                        <?php $blogDetail = BlogDetailDb::getByBlogId($blog->blogId);
                                        $user = UserDb::getById($blog->userId);
                                        $foto = FotoDb::getById($blog->blogId);
                                        $categorie = CategorieDb::getById($blog->categorieId);
                                        ?>
                                        <h2 class="post-title">

                                            <?php echo $blog->titel?>
                                        </h2>
                                        <img class="img img-responsive article-img" src="<?php echo $foto->naam; ?>">
                                        <h3 class="post-subtitle">
                                            <?php echo $blogDetail->beschrijving;?>
                                        </h3>
                                    </a>

                                    <p class="post-meta">Posted by <a href="#userId=<?php echo $blog->userId?>"><?php echo $user->username?></a> at <?php echo date_format(date_create($blog->datum), 'g:ia \o\n l jS F Y');?></p>
                                    <p class="post-meta">Category <a href="blogs.php?categoryId=<?php echo $blog->categorieId?>"><?php echo $categorie->naam?></a></p>

                                    <div class="comments"><a href="#"><?php echo $blog->totalComments?><i class="fa fa-comments fa-lg"></i></a></div>
                                </div>
                            <?php endforeach;?>

                            <hr>
                            <!--<div class="post-preview">
                                <a href="post.php">
                                    <h2 class="post-title">
                                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                                    </h2>
                                    <img class="img img-responsive article-img" src="http://farm1.staticflickr.com/346/18328027128_704280cd4c_k.jpg">
                                    <h3 class="post-subtitle">
                                        We predict too much for the next year and yet far too little for the next ten.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
                                <div class="comments"><a href="#"><i class="fa fa-comments fa-lg"></i></a></div>
                            </div>
                            <hr>
                            <div class="post-preview">
                                <a href="post.php">
                                    <h2 class="post-title">
                                        Science has not yet mastered prophecy
                                    </h2>
                                    <img class="img img-responsive article-img" src="http://farm1.staticflickr.com/510/18737505996_98a20bf592_k.jpg">
                                    <h3 class="post-subtitle">
                                        We predict too much for the next year and yet far too little for the next ten.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
                                <div class="comments"><a href="#"><i class="fa fa-comments fa-lg"></i></a></div>
                            </div>
                            <hr>
                            <div class="post-preview">
                                <a href="post.php">
                                    <h2 class="post-title">
                                        Failure is not an option
                                    </h2>
                                    <img class="img img-responsive article-img" src="http://farm1.staticflickr.com/258/18511405422_d7c67c0ff8_k.jpg">
                                    <h3 class="post-subtitle">
                                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                                    </h3>
                                </a>
                                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                                <div class="comments"><a href="#"><i class="fa fa-comments fa-lg"></i></a></div>
                            </div>
                            <hr>-->
                            <!-- Pager -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <ul class="pager">
            <li class="next">
                <a href="blogs.php">All Blogs &rarr;</a>
            </li>
        </ul>
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

