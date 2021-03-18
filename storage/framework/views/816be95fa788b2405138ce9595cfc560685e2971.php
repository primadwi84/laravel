

<?php $__env->startSection('title', 'Daftar Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Daftar Mahasiswa Ilkom</h1>

                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope ="col">No</th>
                            <th scope ="col">Nama</th>
                            <th scope ="col">Nim</th>
                            <th scope ="col">Kelas</th>
                            <th scope ="col">Skor</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mhs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope ="row" ><?php echo e($loop->iteration); ?></th>
                            <td><?php echo e($mhs->Nama); ?></td>
                            <td><?php echo e($mhs->Nim); ?></td>
                            <td><?php echo e($mhs->Kelas); ?></td>
                            <td><?php echo e($mhs->Skor); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>

                    <label for="max" class="ml-4">Skor Maks: <b><?php echo e($max); ?></b></label>
                    <label for="min" class="ml-4">Skor Min: <b><?php echo e($min); ?></b></label>
                    <label for="rata2" class="ml-4">Rata-Rata: <b><?php echo e($rata2); ?></b></label>

                    <h2>Tabel Frekuensi</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td scope="col">Skor</td>
                                    <td scope="col">Frekuensi</td>
                                </tr>
                           </thead>
                           <tbody>
                               <?php $__currentLoopData = $frekuensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                               <tr>
                                   <td> <?php echo e($skor->skor); ?> </td>
                                   <td> <?php echo e($skor->frekuensi); ?></td>
                                </tr>
                                 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td> <b>Total Skor:</b>  </td>
                                    <td> <?php echo e($totalskor); ?></td>
                                </tr>
                                <tr>
                                    <td> <b>Total Frekuensi:</b>  </td>
                                    <td> <?php echo e($totalfrekuensi); ?></td>
                                </tr>
                           </tbody>
                        </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

   
<?php echo $__env->make('layout/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi\XAMPP\htdocs\Project1\example-app\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>