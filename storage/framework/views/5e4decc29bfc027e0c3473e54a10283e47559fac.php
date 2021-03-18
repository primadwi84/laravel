

<?php $__env->startSection('title', 'Form Tambah Data Mahasiswa Ilkom'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Tambah Data Mahasiswa Ilkom</h1>   
                <form method="POST" action="/students">
                <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['Nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nama" placeholder="Masukkan Nama" name="Nama" value="<?php echo e(old('Nama')); ?>">
                             <?php $__errorArgs = ['Nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class = "invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="Nim">Nim</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['Nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Nim" placeholder="Masukkan Nim" name="Nim" value="<?php echo e(old('Nim')); ?>">
                            <?php $__errorArgs = ['Nim'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class = "invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="Kelas">Kelas</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['Kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Kelas" placeholder="Masukkan Kelas" name="Kelas" value="<?php echo e(old('Kelas')); ?>">
                            <?php $__errorArgs = ['Kelas'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class = "invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label for="Skor">Skor</label>
                            <input type="text" class="form-control <?php $__errorArgs = ['Skor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="Skor" placeholder="Masukkan Skor" name="Skor" value="<?php echo e(old('Skor')); ?>">
                            <?php $__errorArgs = ['Skor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class = "invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\XAMPP\htdocs\Project1\example-app\resources\views/students/create.blade.php ENDPATH**/ ?>