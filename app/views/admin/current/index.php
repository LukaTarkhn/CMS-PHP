<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Current works list</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title-geo</th>
                                <th>Title-eng</th>
                                <th>Title-rus</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($currents as $current): ?>
                                <tr>
                                    <th><?=$current['id']?></th>
                                    <th><?=$current['title_geo']?></th>
                                    <th><?=$current['title_eng']?></th>
                                    <th><?=$current['title_rus']?></th>
                                    <th>
                                        <a href="<?=ADMIN;?>/current/edit?id=<?=$current['id']?>">
                                            <i class="fa fa-fw fa-edit text-info"></i>
                                        </a>
                                        <a href="<?=ADMIN;?>/current/delete?id=<?=$current['id']?>">
                                            <i class="fa fa-fw fa-times text-danger"></i>
                                        </a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->