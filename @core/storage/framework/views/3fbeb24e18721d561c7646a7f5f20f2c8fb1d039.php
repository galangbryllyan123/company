<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\xampp_\htdocs\comapnny profile\@core\resources\views/components/flash-msg.blade.php ENDPATH**/ ?>