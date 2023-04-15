<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Edit Type</h2>

    <form method="post" action="/console/types/edit/<?php echo e($type->id); ?>" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?php echo e(old('title', $type->title)); ?>" required>
            
            <?php if($errors->first('title')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('title')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="w3-button w3-green">Edit Type</button>

    </form>

    <a href="/console/types/list">Back to Type List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ckwwingo/5212/laravel-blade-cms/resources/views/types/edit.blade.php ENDPATH**/ ?>