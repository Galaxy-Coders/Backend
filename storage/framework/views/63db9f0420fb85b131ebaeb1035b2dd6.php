<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.adminLayout.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('adminLayout.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('SideBarActiveAt', null, []); ?> 
        active
     <?php $__env->endSlot(); ?>

    <form action="<?php echo e(route("authors.store")); ?>" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto" style="background: #191C24;">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputImage">Upload Image</label>
            <input type="file" class="form-control border border-light" id="inputImage" name="image">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control border border-light" id="name" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <label for="birthDay" class="form-label">Birth Day</label>
            <input type="text" class="form-control border border-light" id="birthDay" name="birthDay" placeholder="Birth Day">
        </div>
        <div class="mb-3">
            <label for="deathDay" class="form-label">Death Day</label>
            <input type="text" class="form-control border border-light" id="deathDay" name="deathDay" placeholder="Death Day">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control border border-light" id="country" name="country" placeholder="Country">
        </div>
        <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control border border-light" id="bio" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="creativityBio" class="form-label">Creativity Bio</label>
            <textarea class="form-control border border-light" id="creativityBio" rows="3"></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-light">
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/adminPage/authors/create.blade.php ENDPATH**/ ?>