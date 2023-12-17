<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

  <div class="books">
    <div class="top">
      <h1>Kitoblar</h1>
      <div class="category">
        <ul>
          <li class="book_li"><button onclick="li_clicked(0)">Barchasi</button></li>
          <li class="book_li"><button onclick="li_clicked(1)">Eng ko'p o'qilgan</button></li>
          <li class="book_li"><button onclick="li_clicked(2)">Audioli kitoblar</button></li>
          <li class="book_li"><button onclick="li_clicked(3)">Yangi kitoblar</button></li>
        </ul>
      </div>
    </div>
    <div class="bottom">
      <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('books.show', ['book'=>$book->id])); ?>" class="card">
          <div class="card-top">
            <img src="/storage/<?php echo e($book->cover); ?>" alt="">
          </div>
          <div class="card-bottom">
            <h2><?php echo e($book->title); ?></h2>
            <span><?php echo e($book->author); ?></span>
            <div>
              <img src="../imgs/star.svg" alt="">
              <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
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
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/booksPage.blade.php ENDPATH**/ ?>