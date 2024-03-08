<?php
  session_start();
  ?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Новости</title>
  <link href="../logos/favicon.png" rel="icon">
  <link href="../styles/style.css" rel="stylesheet">
</head>
<body>

<div class="container d-none d-md-block">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <h1 class="display-4 fst-italic text-center">Вести Сибири</h1>
    </div>
  </header>
</div>

<nav class="d-md-none navbar sticky-top border-1 bg-white border-bottom my-2 border-black">
  <div class="container">
    <a class="navbar-brand fw-medium" href="../index.php">Вести Сибири</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Меню</h5>
        <button type="button" class="btn-close mr-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1">
          <li class="nav-item nav-link link-body-emphasis border p-3 rounded-3" >
            <a class="text-decoration-none my-2 text-black" href="../index.php">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-house mr-1 text-primary"></i>
                  Главная страница
                </div>
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </li>
          <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3" >
            <a class="text-decoration-none my-2 text-black" href="news.php">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-newspaper mr-1 text-primary"></i>
                  Новости
                </div>
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </li>
          <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3" >
            <a class="text-decoration-none my-2 text-black" href="contacts.html">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <i class="bi bi-chat-square mr-1 text-primary"></i>
                  Контакты
                </div>
                <i class="bi bi-chevron-right"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="d-none d-md-block container sticky-top">
  <div class="nav-scroller bg-white py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between px-1">
      <a class="nav-item nav-link link-body-emphasis active" href="../index.php">Главная страница</a>
      <a class="nav-item nav-link link-body-emphasis" href="news.php">Новости</a>
      <a class="nav-item nav-link link-body-emphasis" href="contacts.php">Контакты</a>
      <?php
         if(isset($_COOKIE['user']) && $_COOKIE['user'] != ''):
      ?>
      <a class="nav-item nav-link link-body-emphasis" href="../scripts/exit.php">Выйти</a>
      <?php else:?>
        <a class="nav-item nav-link link-body-emphasis" href="registration.php">Регистрация</a>
      <?php endif;?>
      </nav>
  </div>
</div>

<main class="container">
<div class="p-3 p-md-2 mb-3 rounded text-body-emphasis bg-body-secondary">
    <h3 class="display-6 fst-italic text-center">Добавление новости</h3>
  </div>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
      <li class="breadcrumb-item active">
        <a class="link-body-emphasis fw-semibold text-decoration-none" href="../index.php">
          <i class="bi bi-house"></i>
          Главная страница
        </a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">
        Добавление новости
      </li>
    </ol>
  </nav>

  <form action="../scripts/add.php" method="post">
    <div class="mb-3 w-100">
      <label for="InputTitle" class="form-label">Заголовок</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="mb-3 w-100">
      <label for="InputPreview" class="form-label">Анонс</label>
      <input type="preview" class="form-control" id="InputPreview" name="preview" rows="2" required>
    </div>
    <div class="mb-3 w-100 h-50">
      <label for="InputText" class="form-label">Текст</label>
      <input type="text" class="form-control" id="InputText" name="text" required>
    </div>
    <div class="mb-3 w-100">
      <label for="InputImg" class="form-label">Фото</label>
      <input type="img" class="form-control" id="InputImg" name="img" required>
    </div>
    <div class="mb-3 w-100">
      <label for="InputDate" class="form-label">Дата</label>
      <input type="date" class="form-control" id="InputDate" name="date" name="date" value="<?php echo date("Y-m-d") ?>"  readonly>
    </div>
    <button type="submit" class="btn btn-outline-dark">Добавить новость</button>
    <?php
    if(isset($_SESSION['error2']) && !empty($_SESSION['error2'])) {
      echo '<div class="alert alert-danger text-center mt-1" role="alert">'. 
      $_SESSION['error2'] . '</div>';
      $_SESSION['error2'] = ""; // Сброс ошибки после вывода
    }
    ?>
  </form>


</main>

<footer class="py-2 mt-4 border-top">
  <div class="d-flex container flex-column">
    <div class="mb-2">
      Сайт был создан с помощью фреймворка
    </div>
    <div>
      <a href="https://getbootstrap.com/" class="footer-logo text-black text-decoration-none">
        <i class="bi bi-bootstrap-fill purple-color"></i> Bootstrap 5
      </a>
    </div>
  </div>
</footer>

<script src="scripts/bootstrap.js"></script>

</body>
</html>