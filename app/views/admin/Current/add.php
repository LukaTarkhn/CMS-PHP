<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Add new current work</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i><?=$_SESSION['success']; unset($_SESSION['success']);?></h5>
                    </div>
                <?php endif; ?>
                <form action="<?=ADMIN;?>/current/add" method="post" data-toggle="validator">
                    <div class="form-group">
                                <label for="title">Main image</label>
                                <div class="box-body">
                                    <div id="single" class="btn btn-success" data-url="current/add-image" data-name="single">Select Image</div>
                                    <p><small>Recomended size: 980x255px</small></p>
                                    <div class="single"></div>
                                </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-geo</label>
                            <input type="text" class="form-control" name="title_geo" id="title_geo" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-geo</label>
                            <textarea type="text" name="content_geo" id="content_geo" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-eng</label>
                            <input type="text" class="form-control" name="title_eng" id="title_eng" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-eng</label>
                            <textarea type="text" name="content_eng" id="content_eng" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-rus</label>
                            <input type="text" class="form-control" name="title_rus" id="title_rus" value="" required>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-rus</label>
                            <textarea type="text" name="content_rus" id="content_rus" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            </textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->