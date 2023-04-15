<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <h2>Add Type</h2>

    <form method="post" action="/console/entries/add" novalidate class="w3-margin-bottom">

        <?php echo csrf_field(); ?>

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?php echo e(old('title')); ?>" required>
            <label for="content">Content:</label>
            <input type="content" name="content" id="content" value="<?php echo e(old('content')); ?>" required>
            <label for="learned_at">Date:</label>
            <input type="date" name="learned_at" id="learned_at" value="<?php echo e(old('learned_at')); ?>" required>
            
            <?php if($errors->first('title')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('title')); ?></span>
            <?php endif; ?>
            <?php if($errors->first('content')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('content')); ?></span>
            <?php endif; ?>
            <?php if($errors->first('learned_at')): ?>
                <br>
                <span class="w3-text-red"><?php echo e($errors->first('learned_at')); ?></span>
            <?php endif; ?>
        </div>

        <button type="submit" class="w3-button w3-green">Add Entry</button>

    </form>

    <a href="/console/entries/list">Back to Entry List</a>

</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ckwwingo/5212/laravel-blade-cms/resources/views/entries/add.blade.php ENDPATH**/ ?>