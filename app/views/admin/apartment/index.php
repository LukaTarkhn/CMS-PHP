<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Apartments list</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<style>
    .sold {
        background: #1ebc8d;
        color: #fff;
    }
</style>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                            <tr>
                                <th>Floor</th>
                                <th>Area</th>
                                <th>Sell Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $sumPrice = 0 ?>
                            <?php foreach ($apartments as $apartment): ?>
                                <tr class="<?=$apartment['status'] ? 'sold' : '';?>">
                                    <th>floor <?=$apartment['floorid']?></th>
                                    <th><?=$apartment['kvmeter']?> kv </th>
                                    <th><?=$apartment['sellprice']?> GEL</th>
                                    <th><?=$apartment['status'] ? 'Sold' : 'For sale';?></th>
                                    <th>
                                        <a href="<?=ADMIN;?>/apartment/edit?id=<?=$apartment['id']?>">
                                            <i class="fa fa-fw fa-edit text-primary"></i>
                                        </a>
                                    </th>
                                </tr>
                                <?php $sumPrice = $sumPrice + intval($apartment['sellprice']); ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                            <div class="info-box bg-success">
                                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Sum</span>
                                    <span class="info-box-number"><?=$sumPrice?> GEL</span>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->