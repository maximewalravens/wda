<form class="form-horizontal" id="commentForm" role="form">
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="addComment" id="commentTitel" rows="1"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Comment</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="addComment" id="comment" rows="5"></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <input class="btn btn-success btn-circle text-uppercase" type="submit"  id="submitComment" value="Submit comment" />  </div>
    </div>
    <input type="hidden" id="userId" value="<?php echo $_SESSION["userId"]?>">
    <input type="hidden" id="commentDatum" value="<?php echo date('Y-m-d') ?>">
    <input type="hidden" id="blogId" value="<?php echo $_GET["id"]; ?>">
</form>
