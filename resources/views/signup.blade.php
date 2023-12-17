<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ro'yxatdan o'tish</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../responsive/resposive.css">
</head>

<body>
  <div class="signup">
    <div class="left"></div>
    <div class="center">
      <div class="text">
        <h1>Ro'yxatdan O'tish</h1>
        <p>
          Akkauntingiz bormi?
        </p>
        <a class="signup-btn" href="{{ route('signin') }}">Kirish</a>
      </div>
      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <input type="text" placeholder="Ism" name="name" required>
        <input type="text" placeholder="Familya" name="surname" required>
        <input type="number" placeholder="Telefon raqam" name="phone" required>
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Parol" name="password" required>
        <button type="submit">Jo'natish</button>
      </form>
    </div>
  </div>
</body>

</html>