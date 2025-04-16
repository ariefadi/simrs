<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="m-0 font-weight-bold text-primary">Data Pasien</h4>
            <a href="<?php echo e(route('pasien.create')); ?>" class="d-none d-sm-inline-block btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Tambah Data</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Foto</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pasiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($p->nama); ?></td>
                            <td><?php echo e($p->alamat); ?></td>
                            <td><?php echo e($p->no_telepon); ?></td>
                            <td><?php echo e($p->jenis_kelamin); ?></td>
                            <td>
                                <?php if(empty($p->foto)): ?>
                                <img src="<?php echo e(url('images/user.png')); ?>" alt="project-image" class="rounded" style="width: 100%; max-width: 50px; height: auto;">
                                <?php else: ?>
                                <img src="<?php echo e(url('images')); ?>/<?php echo e($p->foto); ?>" alt="project-image" class="rounded" style="width: 100%; max-width: 50px; height: auto;">
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(route('pasien.edit', $p->id)); ?>" class="btn btn-sm btn-warning">edit</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo e($p->id); ?>">hapus</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="exampleModal<?php echo e($p->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Pasien</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Apakah anda yakin akan menghapus data <b><?php echo e($p->nama); ?></b>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="<?php echo e(route('pasien.delete', $p->id)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/simrs/resources/views/pasien/index.blade.php ENDPATH**/ ?>