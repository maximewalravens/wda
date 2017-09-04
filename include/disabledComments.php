<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">×</span><span class="sr-only">Close</span>
    </button>
    <strong>Hey!</strong> If you already have an account <a href="#" class="alert-link">Login</a> now to make the comments you want. If you do not have an account yet you're welcome to <a href="#" class="alert-link"> create an account.</a>
</div>
<form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="addComment" id="addComment" rows="1" disabled></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Comment</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="addComment" id="addComment" rows="5" disabled></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="uploadMedia" class="col-sm-2 control-label">Upload media</label>
        <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-addon">http://</div>
                <input type="text" class="form-control" name="uploadMedia" id="uploadMedia" disabled>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button class="btn btn-success btn-circle text-uppercase disabled" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Submit comment</button>
        </div>
    </div>
</form>