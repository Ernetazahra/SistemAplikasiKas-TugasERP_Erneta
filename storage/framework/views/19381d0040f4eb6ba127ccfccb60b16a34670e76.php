<?php $__env->startSection('title'); ?>
    Laporan Uang  Masuk - UANGKU
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1> LAPORAN UANG MASUK</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-chart-line"></i> LAPORAN UANG MASUK</h4>
                    </div>

                    <div class="card-body">

                        <form action="<?php echo e(route('account.laporan_debit.check')); ?>" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TANGGAL AWAL</label>
                                        <input type="text" name="tanggal_awal" value="<?php echo e(old('tanggal_awal')); ?>" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-md-2" style="text-align: center">
                                    <label style="margin-top: 38px;">S/D</label>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>TANGGAL AKHIR</label>
                                        <input type="text" name="tanggal_akhir" value="<?php echo e(old('tanggal_kahir')); ?>" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-primary mr-1 btn-submit btn-block" type="submit" style="margin-top: 30px"><i class="fa fa-filter"></i> FILTER</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <?php if(isset($debit)): ?>
                    <div class="card">
                        <div class="card-header">
                            <h4><i class="fas fa-chart-line"></i> LAPORAN UANG MASUK</h4>
                        </div>

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                        <th scope="col">KATEGORI</th>
                                        <th scope="col">NOMINAL</th>
                                        <th scope="col">KETERANGAN</th>
                                        <th scope="col">TANGGAL</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $no = 1;
                                    ?>
                                    <?php $__currentLoopData = $debit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hasil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row" style="text-align: center"><?php echo e($no); ?></th>
                                            <td><?php echo e($hasil->name); ?></td>
                                            <td><?php echo e(rupiah($hasil->nominal)); ?></td>
                                            <td><?php echo e($hasil->description); ?></td>
                                            <td><?php echo e($hasil->debit_date); ?></td>
                                        </tr>
                                        <?php
                                            $no++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <div style="text-align: center">
                                    <?php echo e($debit->links("vendor.pagination.bootstrap-4")); ?>

                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif; ?>


            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\ZLL\erneta\uangku-laravel\resources\views/account/laporan_debit/index.blade.php ENDPATH**/ ?>