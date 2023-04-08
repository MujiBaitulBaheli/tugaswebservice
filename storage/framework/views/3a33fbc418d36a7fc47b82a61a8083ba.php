<?php $__env->startSection('content'); ?>
    <table>

        <a href="<?php echo e(route('tugas.create')); ?>" class=" btn btn-info float-end mt-2">Tambah Data</a>
        <table class="table table-bordered mt-5" style="margin-top: -100px;">
            <thead>
                <th>No</th>
                <th>Author</th>
                <th>Tilte</th>
                <th>Body</th>
                <th>Keyword</th>
                <th>Action</th>
            </thead>


            <tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($d->author); ?></td>
                        <td><?php echo e($d->title); ?></td>
                        <td><?php echo e($d->body); ?></td>
                        <td><?php echo e($d->keyword); ?></td>
                        <td><a href="<?php echo e(route('tugas.edit', $d->id)); ?>" class="btn btn-warning"> Edit </a>
                            <form action="<?php echo e(route('tugas.delete', ['id' => 1])); ?>">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('delete')); ?>

                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\webservice\resources\views/tugas.blade.php ENDPATH**/ ?>