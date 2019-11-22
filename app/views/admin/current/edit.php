<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">edit current work</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="<?=ADMIN;?>/current/edit" method="post" data-toggle="validator">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-geo</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?=$current->title_geo;?>">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-eng</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?=$current->title_eng;?>">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Title-rus</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?=$current->title_rus;?>">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-geo</label>
                            <textarea type="text" name="content" id="content" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?=$current->content_geo;?>
                            </textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-eng</label>
                            <textarea type="text" name="content" id="content" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?=$current->content_eng;?>
                            </textarea>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Content-rus</label>
                            <textarea type="text" name="content" id="content" class="form-control textarea" placeholder="Place some text here"
                                      style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                <?=$current->content_rus;?>
                            </textarea>
                        </div>
                    </div>

                    <div class="box-footer">
                        <input type="hidden" name="id" value="<?=$current->id;?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->