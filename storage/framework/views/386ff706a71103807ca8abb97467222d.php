<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
    <div class="head-bg"></div>

    <header>
        <div class="slider">
            <div class="slides">
                <a href="#" class="one">
                    <h1>Temuriylar davri adabiyoti</h1>
                </a>
                <a href="#" class="two">
                    <h1>Jadidlar davri adabiyoti</h1>
                </a>
                <a href="#" class="three">
                    <h1>Sovet davri adabiyoti</h1>
                </a>
                <a href="#" class="four">
                    <h1>Jahon adabiyoti</h1>
                </a>
            </div>
            <div class="slider-control">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
                <div class="four"></div>
            </div>
        </div>
        
        <div class="search-bar">
            <h1>Qidirish</h1>
            <div class="s-bottom">
                <input class="search-inp" placeholder="Adiblar, kitoblar, audiolar, maqolalar..." type="search"
                    required>
                <button type="submit">Izlash</button>
            </div>
        </div>
    </header>

    <div class="main-books">
        <div class="top">
            <h1>Bizning kitoblar</h1>
        </div>
        <div class="bottom">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('books.show',['book'=>$book->id])); ?>" class="card">
                    <div class="card-top">
                        <img src="./storage/<?php echo e($book->cover); ?>" alt="">
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

    <div class="compony-info">
        <div class="container">
            <div>
                <img src="./imgs/pen-nib-svgrepo-com.svg" alt="">
                <p>Yozuvchilar</p>
                <h1><?php echo e($authors); ?></h1>
            </div>
            <div>
                <img src="./imgs/kitob.svg" alt="">
                <p>Kitoblar</p>
                <h1><?php echo e(count($books)); ?></h1>
            </div>
            <div>
                <img src="./imgs/naushnik.svg" alt="">
                <p>Audio kitoblar</p>
                <h1><?php echo e(count($files)); ?></h1>
            </div>
            <div>
                <img src="./imgs/profile.svg" alt="">
                <p>Kitobxonlar</p>
                <h1><?php echo e(count($users)); ?></h1>
            </div>
        </div>
    </div>

    <div class="contact-us" id="contact-us">
        <div class="top">
            <h1>Biz bilan aloqa</h1>
        </div>
        <div class="bottom">
            <div class="right">
                <form>
                    <input type="text" placeholder="Ism familiyangizni kriting..." required>
                    <input type="number" placeholder="Telefon raqamingizni kiriting..." required>
                    <textarea name="" id="" cols="30" rows="10" required placeholder="Izoh qoldiring..."></textarea>
                    <button type="submit">Jonatish</button>
                </form>
            </div>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/index.blade.php ENDPATH**/ ?>