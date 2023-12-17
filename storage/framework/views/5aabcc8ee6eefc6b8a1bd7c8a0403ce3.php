<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

  <div class="comment">
    <div class="container">
      <div class="top">
        <h2>Izoh qoldiring</h2>
        <img src="../imgs/close-button-svgrepo-com.svg" alt="" width="20" height="20" onclick="comment('close-nocomment')">
      </div>
      <div class="bottom">
        <form action="">
          <textarea name="" id="" placeholder="Izoh" required></textarea>
          <input type="submit" value="Jo'natish" onclick="comment('close')">
        </form>
      </div>
    </div>
  </div>

  <!-- book page coding -->

  <div class="book">
    <div class="left">
      <div class="img">
        <img src="/storage/<?php echo e($book->cover); ?>" alt="">
      </div>
    </div>
    <div class="right">
      <h1><?php echo e($book->title); ?></h1>
      <div class="book-author-rate">
        <p class="author-name"><?php echo e($book->author); ?></p>
        <span>|</span>
        <img src="../imgs/star.svg" alt="">
        <p class="rate">4.1</p>
      </div>
      <div class="book-info">
        <div>
          <p>Sahifalar soni:</p>
          <span><?php echo e($book->pages); ?></span>
        </div>
        <div>
          <p>Chop etilgan:</p>
          <span><?php echo e($book->date); ?></span>
        </div>
        <div>
          <p>Janri:</p>
          <span><?php echo e($book->ganre); ?></span>
        </div>
        <div>
          <p>Nashriyot:</p>
          <span>Nihol nashr</span>
        </div>
      </div>
      <div class="full-info">
        <div class="top">
          <p>To’liq ma’lumot</p>
          <img src="../imgs/Subtract.png" alt="">
          <div class="hr"></div>
        </div>
        <div class="bottom">
          <p><?php echo e($book->about); ?>

          </p>
        </div>
      </div>
      <div class="formats">
        <div class="top">
          <p>Mavjud formatlar</p>
        </div>
        <div class="bottom">
          <div class="one">
            <div>
              <img src="../imgs/kitob.svg" alt="">
              <p>Qog’oz kitob</p>
              <span>27 000 so’m</span>
            </div>
            <div>
              <img src="../imgs/naushnik.svg" alt="">
              <p>Audiokitob</p>
              <span>6:23 soat</span>
            </div>
            <div>
              <img src="../imgs/phone.svg" alt="">
              <p>Elektron</p>
              <span>pdf, epub</span>
            </div>
          </div>
          <div class="two">
            <a href="<?php echo e(route('bookShelf', ['id'=>$book->id])); ?>">
              <button>O'qish</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="kitob-haqida">
    <div class="top">
      <ul>
        <li><a href="<?php echo e(route('authors.show', ['author'=>"1"])); ?>">Muallif haqida</a></li>
        <li onclick="showContent('iqtibos')">Kitobdan iqtiboslar</li>
        <li onclick="showContent('taqriz')">Kitobxonlar taqrizi</li>
      </ul>
      <button onclick="comment('open')"><img src="../imgs/comment.svg" alt=""></button>
    </div>
    <div class="bottom">
      <div class="iqtibos">
        <div class="card one">
          <div class="card-left">
            <div class="book-top">
              <img src="../imgs/qoshtirnoq.png" alt="">
            </div>
            <div class="book-bottom">
              <p>Inson bolasi ne kunlarni ko‘rmaydi?!
                Har bir odam o‘z g‘ami bilan bo‘lsa, hayotdan ko‘z yumib ketganlarga umr bo‘yi motam tutib o‘tsa, bu
                moddiy olam shu kunlarga yetolarmidi?
                Hayot to‘lqini ojizlarni qirg‘oqqa irg‘itib tashlaydi. Oqimga qarshi suza olganlar, to‘lqinni
                egarlaganlargina ertangi kunga yetib keladi.
              </p>
            </div>
          </div>
          <div class="card-right"></div>
        </div>
        <div class="card two">
          <div class="card-left">
            <div class="book-top">
              <img src="../imgs/qoshtirnoq.png" alt="">
            </div>
            <div class="book-bottom">
              <p>Yer kurrasida chumolidek mehnat qilayotganlardan ko‘ra, tuproq tagida yotganlar ko‘p. Yer qatlami odam
                suyaklariga to‘lib ketgan.
              </p>
            </div>
          </div>
          <div class="card-right"></div>
        </div>
      </div>
      <div class="taqriz">
        <div class="card one">
          <div class="card-left">
            <div class="book-top">
              <h2>Azizbek G'ulomov</h2>
            </div>
            <div class="book-bottom">
              <p>Inson bolasi ne kunlarni ko‘rmaydi?!
                Har bir odam o‘z g‘ami bilan bo‘lsa, hayotdan ko‘z yumib ketganlarga umr bo‘yi motam tutib o‘tsa, bu
                moddiy olam shu kunlarga yetolarmidi?
                Hayot to‘lqini ojizlarni qirg‘oqqa irg‘itib tashlaydi. Oqimga qarshi suza olganlar, to‘lqinni
                egarlaganlargina ertangi kunga yetib keladi.
              </p>
            </div>
          </div>
        </div>
        <div class="card two">
          <div class="card-left">
            <div class="book-top">
              <h2>Ahadov Asadbek</h2>
            </div>
            <div class="book-bottom">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt repellendus provident enim
                perferendis eaque asperiores laudantium atque quasi, officiis odit nostrum, earum fuga tempore
                quibusdam?
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="kitob-tavsiya">
    <div class="top">
      <h2>Sizga yoqishi mumkin</h2>
      <button onclick="kitob_tavsiya()">Barchasini ko’rish</button>
    </div>
    <div class="bottom">
      
        <a href="../pages/book.html" class="card">
          <div class="card-top">
            <img src="../imgs/ikki eshik orasi.png" alt="">
          </div>
          <div class="card-bottom">
            <h2><?php echo e($book->title); ?></h2>
            <span>O’tkir Hoshimov</span>
            <div>
              <img src="../imgs/star.svg" alt="">
              <h3> <b>4.1</b> • <strong>3400</strong> ta fikrlar</h3>
            </div>
          </div>
        </a>
      
    </div>
  </div>

  <!-- book page coding coding end -->


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/bookShow.blade.php ENDPATH**/ ?>