<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

  <div class="profile-info">
    <div class="container">
      <div class="left">
        <div class="img" style="background-image: url(/imgs/user.png);"></div>
        <p>Oltin kitobxon</p>
        <span>186 ta kitob o’qigan</span>
      </div>
      <div class="right">
        <h1>Farruxbek Abdullayev</h1>
        <div>
          <p>Tavallud:</p>
          <span> February 08, 1999</span>
        </div>
        <div>
          <p>Manzili:</p>
          <span>Jizzax</span>
        </div>
        <div>
          <p>Bio:</p>
          <span>Frontend developer</span>
        </div>
      </div>
    </div>
  </div>

  <div class="shelf">
    <div class="top">
      <h1>Mening kitoblarim</h1>
    </div>
    <div class="bottom">
      <a href="/pages/book.html" class="card">
        <div class="card-top">
          <img src="/imgs/ajdodlarimiz fojiasi.png" alt="">
        </div>
        <div class="card-bottom">
          <h2>Ajdodlarimiz fojiasi</h2>
          <span>Mirkarim Osim</span>
          <div>
            <img src="../imgs/star.svg" alt="">
            <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
          </div>
        </div>
      </a>
      <a href="/pages/book.html" class="card">
        <div class="card-top">
          <img src="/imgs/ajdodlarimiz fojiasi.png" alt="">
        </div>
        <div class="card-bottom">
          <h2>Ajdodlarimiz fojiasi</h2>
          <span>Mirkarim Osim</span>
          <div>
            <img src="../imgs/star.svg" alt="">
            <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
          </div>
        </div>
      </a>
    </div>
  </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/profileEdit.blade.php ENDPATH**/ ?>