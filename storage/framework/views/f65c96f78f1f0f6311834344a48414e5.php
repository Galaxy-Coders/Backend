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

    <form action="<?php echo e(route("books.update", ['book' => $book->id])); ?>" method="POST" enctype="multipart/form-data" class="w-75 p-3 m-auto" style="background: #191C24;">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputCover">Upload Cover</label>
            <input type="file" class="form-control border border-light" id="inputCover" name="cover" value="<?php echo e($book->cover); ?>">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputAudio">Upload audio</label>
            <input type="file" class="form-control border border-light" id="inputAudio" name="audio" value="<?php echo e($book->audio); ?>">
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputDocument">Upload pdf</label>
            <input type="file" class="form-control border border-light" id="inputDocument" name="document" value="<?php echo e($book->document); ?>">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control border border-light" id="title" name="title" placeholder="Title" value="<?php echo e($book->title); ?>">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control border border-light" id="author" name="author" placeholder="Author" value="<?php echo e($book->author); ?>">
        </div>
        <div class="mb-3">
            <label for="pages" class="form-label">Pages</label>
            <input type="text" class="form-control border border-light" id="pages" name="pages" placeholder="Pages" value="<?php echo e($book->pages); ?>">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="text" class="form-control border border-light" id="date" name="date" placeholder="Date" value="<?php echo e($book->date); ?>">
        </div>
        <div class="mb-3">
            <label for="ganre" class="form-label">Ganre</label>
            <input type="text" class="form-control border border-light" id="ganre" name="ganre" placeholder="Ganre" value="<?php echo e($book->ganre); ?>">
        </div>
        <div class="mb-3">
            <label for="about" class="form-label">About</label>
            <textarea class="form-control border border-light" id="about" rows="3" name="about"><?php echo e($book->about); ?></textarea>
        </div>
        <input type="submit" value="Submit" class="btn btn-light">
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/adminPage/books/edit.blade.php ENDPATH**/ ?>