<?php $__env->startSection('content'); ?>

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/entries/list">Manage Entries</a></li>
        <li><a href="/console/logout">Log Out</a></li>
    </ul>

</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.console', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ckwwingo/5212/laravel-blade-cms/resources/views/console/dashboard.blade.php ENDPATH**/ ?>