<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

  <div class="authors">
    <div class="top">
      <h1>Mualliflar</h1>
      <div class="category">
        <ul>
          <li class="author_li"><button onclick="li_clicked(0)">Barchasi</button></li>
          <li class="author_li"><button onclick="li_clicked(1)">Temuriylar davri</button></li>
          <li class="author_li"><button onclick="li_clicked(2)">Jadid adabiyoti</button></li>
          <li class="author_li"><button onclick="li_clicked(3)">Sovet davri</button></li>
          <li class="author_li"><button onclick="li_clicked(4)">Mustaqillik davri</button></li>
          <li class="author_li"><button onclick="li_clicked(5)">Jahon adab iyoti</button></li>
        </ul>
      </div>
    </div>
    <div class="bottom">
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('authors.show', ['author'=>$author->id])); ?>" class="card">
                <div class="card-top">
                    <img src="/storage/<?php echo e($author->image); ?>" alt="">
                </div>
                <div class="card-bottom">
                    <div class="author-info">
                        <h2><?php echo e($author->name); ?></h2>  
                        <p><?php echo e($author->birthDay); ?>-<?php echo e($author->deathDay); ?></p>
                    </div>
                    <div class="card-info">
                        <div>
                            <img src="../imgs/kitob.svg" alt="">
                            <p>34</p>
                        </div>
                        <div>
                            <img src="../imgs/naushnik.svg" alt="">
                            <p>13</p>
                        </div>
                    </div>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

  <script src="../Javascript/book.js"></script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/authors.blade.php ENDPATH**/ ?>