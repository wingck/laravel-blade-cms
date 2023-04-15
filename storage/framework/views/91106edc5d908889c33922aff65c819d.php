<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Manage Entries</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Content</th>
            <th>Date</th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($entry->title); ?></td>
                <td><?php echo e($entry->content); ?></td>
                <td><?php echo e(\Carbon\Carbon::parse($entry->learned_at)->format('d/m/Y g:i A')); ?></td>
                <td><a href="/console/entries/edit/<?php echo e($entry->id); ?>">Edit</a></td>
                <td><a href="/console/entries/delete/<?php echo e($entry->id); ?>">Delete</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

    <a href="/console/entries/add" class="w3-button w3-green">New Type</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ckwwingo/5212/laravel-blade-cms/resources/views/entries/list.blade.php ENDPATH**/ ?>