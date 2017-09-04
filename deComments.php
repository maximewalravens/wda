<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 15-8-2017
 * Time: 23:51
 */


include_once 'Database/CRUD/UserDb.php';
include_once 'Database/CRUD/BlogDb.php';
include_once 'Database/CRUD/BlogDetailDb.php';
include_once 'Database/CRUD/CategorieDb.php';
include_once 'Database/CRUD/FotoDb.php';
include_once 'Database/CRUD/CommentDb.php';

if(count($comments) > 0):
    foreach($comments as $comment):
    $user = UserDb::getById($comment->userId);
$foto = FotoDb::getByUserId($user->userId);
    ?>
<li class="media" id="comments">
    <a class="pull-left" href="#">
        <img class="media-object img-circle" src="<?php echo $foto->naam; ?>" alt="profile">
    </a>
    <div class="media-body">
        <div class="well well-lg">
            <h4 class="media-heading text-uppercase reviews"><?php echo $user->username;?></h4>
            <ul class="media-date text-uppercase reviews list-inline">
                <li class="dd"><?php echo $comment->datum;?></li>

            </ul>
            <p class="media-comment">
                <h4><?php echo $comment->titel;?></h4>
               <?php echo $comment->tekst;?>
            </p>
        </div>
    </div>
</li>
    <?php
endforeach;
else:?>
    <p>wees de eerste om een comment te plaatsen !.</p>
<?php endif;?>