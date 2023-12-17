<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminLayout.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminLayout.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('SideBarActiveIn', null, []); ?> 
        active
     <?php $__env->endSlot(); ?>

    <form action="<?php echo e(route("authors.update", ['author' => $author->id])); ?>" method="POST" enctype="multipart/form-data">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <input type="file" name="image" value="<?php echo e($author->image); ?>">
        <input type="text" name="name" value="<?php echo e($author->name); ?>">
        <input type="text" name="birthDay" value="<?php echo e($author->birthDay); ?>">
        <input type="text" name="deathDay" value="<?php echo e($author->deathDay); ?>">
        <input type="text" name="bio" value="<?php echo e($author->bio); ?>">
        <input type="text" name="creativityBio" value="<?php echo e($author->creativityBio); ?>">
        <input type="text" name="country" value="<?php echo e($author->country); ?>">
        <input type="submit" value="ok" name="ok">
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/adminPage/authors/edit.blade.php ENDPATH**/ ?>