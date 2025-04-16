<?php $__env->startSection('content'); ?>
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="m-0 font-weight-bold text-primary"> Edit Data Pasien</h4>
            <a href="<?php echo e(route('index.index')); ?>" class="d-none d-sm-inline-block btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Kembali</span>
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="<?php echo e(route('pasien.update', $id->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama" name="nama" value="<?php echo e($id->nama); ?>">
                        <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea class="form-control" id="alamat" name="alamat"><?php echo e($id->alamat); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon:</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['no_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="no_telepon" name="no_telepon" value="<?php echo e($id->no_telepon); ?>">
                        <?php $__errorArgs = ['no_telepon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo e($id->jenis_kelamin); ?>">
                        <?php $__errorArgs = ['jenis_kelamin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto:</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        <br>
                        <?php if(isset($id->foto) && !empty($id->foto)): ?>
                            <img src="<?php echo e(url('images')); ?>/<?php echo e($id->foto); ?>" alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                        <?php else: ?>
                            <img src="<?php echo e(url('images/user.png')); ?>" alt="project-image" class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/simrs/resources/views/pasien/edit.blade.php ENDPATH**/ ?>