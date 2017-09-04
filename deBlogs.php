<?php

include_once 'Database/CRUD/BlogDb.php';
include_once 'Database/CRUD/BlogDetailDb.php';
include_once 'Database/CRUD/UserDb.php';
include_once 'Database/CRUD/CategorieDb.php';
include_once 'Database/CRUD/FotoDb.php';

if(count($blogs) > 0):

    foreach($blogs as $blog):?>
        <div class="post-preview">
            <?php $blogDetail = BlogDetailDb::getByBlogId($blog->blogId);
            $user = UserDb::getById($blog->userId);
            $foto = FotoDb::getById($blog->blogId);
            $categorie = CategorieDb::getById($blog->categorieId);
            ?>
            <h2>
                <a href="post.php?id=<?php echo $blog->blogId;?>"><?php echo $blog->titel;?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $user->username; ?></a>
            </p>
            <p class="lead">
                Categorie <b><?php echo $categorie->naam; ?></b>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo date_format(date_create($blog->datum), 'g:ia \o\n l jS F Y');?></p>
            <hr>
            <img class="img-responsive" src="<?php echo $foto->naam;?>" alt="">

            <div class="comments"><a href="#"><?php echo $blog->totalComments;?><i class="fa fa-comments fa-lg"></i></a></div>
            <hr>
            <p><?php echo $blogDetail->beschrijving;?></p>
            <a class="btn btn-primary" href="post.php?id=<?php echo $blog->blogId;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
        <?php
endforeach;
else:?>
<p>hmm er zijn precies geen blogs van deze categorie gevonden.</p>
<?php endif;?>
