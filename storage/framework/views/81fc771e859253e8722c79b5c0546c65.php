<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kirish</title>
  <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="signin">
    <div class="left"></div>
    <div class="right">
      <div class="text">
        <h1>Kirish</h1>
        <p>
          akkauntingiz yo'qmi?
        </p>
        <a class="signin-btn" href="<?php echo e(route('signup')); ?>">Ro'yxatdan o'tish</a>
      </div>
      <form action="<?php echo e(route('authenticate')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Parol" name="password" required>
        <button type="submit"><a href="../index.html">Jo'natish</a></button>
      </form>
    </div>
  </div>
</body>
</html><?php /**PATH /Users/bek/Documents/AdminPage/resources/views/signin.blade.php ENDPATH**/ ?>