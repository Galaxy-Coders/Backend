<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="author">
        <div class="left">
        <div class="img">
            <img src="/storage/<?php echo e($author->image); ?>" alt="">
        </div>
        <div class="container">
            <div class="author-info">
            <div class="container-left">
                <p>Tavallud sanasi</p>
                <h1><?php echo e($author->birthDay); ?></h1>
                <span>Toshkent, Uzbekistan</span>
            </div>
            <div class="container-center">
                <h1>-</h1>
            </div>
            <div class="container-right">
                <p>Tavallud sanasi</p>
                <h1><?php echo e($author->deathDay); ?></h1>
                <span>Toshkent, Uzbekistan</span>
            </div>
            </div>
        </div>
        </div>
        <div class="right">
        <h1><?php echo e($author->name); ?></h1>
        <p class="title">
            <?php echo e($author->bio); ?>

        </p>
        <div class="ijodi">
            <div class="top">
            <img src="../imgs/qoralama.svg" alt="">
            <h2>Ijodi</h2>
            </div>
            <div class="bottom">
            <p>
                <?php echo e($author->creativityBio); ?>

            </p>
            </div>
        </div>
        <div class="asarlari">
            <div class="top">
            <h2>Asarlari</h2>
            <button onclick="asarlar_btn()">Barchasini ko’rish</button>
            </div>
            <div class="bottom">
            <a href="../pages/book.html" class="card">
                <div class="card-top">
                <img src="../imgs/ikki eshik orasi.png" alt="">
                </div>
                <div class="card-bottom">
                <h2>Ikki eshik orasi</h2>
                <span>O’tkir Hoshimov</span>
                <div>
                    <img src="../imgs/star.svg" alt="">
                    <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
                </div>
                </div>
            </a>
            <a href="../pages/book.html" class="card">
                <div class="card-top">
                <img src="../imgs/tushda kechgan umrlar.png" alt="">
                </div>
                <div class="card-bottom">
                <h2>Tushda kechga umrlar</h2>
                <span>O’tkir Hoshimov</span>
                <div>
                    <img src="../imgs/star.svg" alt="">
                    <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
                </div>
                </div>
            </a>
            <a href="../pages/book.html" class="card">
                <div class="card-top">
                <img src="../imgs/ajdarning tavbasi.png" alt="">
                </div>
                <div class="card-bottom">
                <h2>“Ajdar”ning tavbasi</h2>
                <span>O’tkir Hoshimov</span>
                <div>
                    <img src="../imgs/star.svg" alt="">
                    <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
                </div>
                </div>
            </a>
            <a href="../pages/book.html" class="card">
                <div class="card-top">
                <img src="../imgs/ulugbek xazinasi.png" alt="">
                </div>
                <div class="card-bottom">
                <h2>Ulug’bek Xazinasi</h2>
                <span>Odil Yoqubov</span>
                <div>
                    <img src="../imgs/star.svg" alt="">
                    <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
                </div>
                </div>
            </a>
            <a href="../pages/book.html" class="card">
                <div class="card-top">
                <img src="../imgs/ulugbek xazinasi.png" alt="">
                </div>
                <div class="card-bottom">
                <h2>Ulug’bek Xazinasi</h2>
                <span>Odil Yoqubov</span>
                <div>
                    <img src="../imgs/star.svg" alt="">
                    <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/authorShow.blade.php ENDPATH**/ ?>