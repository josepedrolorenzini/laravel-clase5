<!-- resources/views/components/card.blade.php -->
<div class="card">
    <div class="card-header">
        <h3><?php echo e($title); ?></h3>
    </div>
    <div class="card-body">
        <p><?php echo e($content); ?></p>
        <?php if($link): ?>
            <a href="<?php echo e($link); ?>" class="btn btn-primary">Link</a>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp72\htdocs\2024\php\codigoFacilito\laravel\clase5-component\resources\views/components/card.blade.php ENDPATH**/ ?>