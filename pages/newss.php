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
            <a class="text-decoration-none my-2 text-black" href="news.html">
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
      <a class="nav-item nav-link link-body-emphasis" href="../index.php">Главная страница</a>
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
  <div class="p-4 p-md-5 mb-4 rounded-lg-5 rounded-3 text-body-emphasis bg-body-secondary">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
        <li class="breadcrumb-item">
          <a class="link-body-emphasis fw-semibold text-decoration-none" href="../index.php">
            <i class="bi bi-house"></i>
            Главная страница
          </a>
        </li>
        <li class="breadcrumb-item">
          <a class="link-body-emphasis fw-semibold text-decoration-none" href="news.php">
            Новости
          </a>
        </li>
      </ol>
    </nav>
    <div class="d-flex flex-row">
      <div>
        <h3 class="display-5 fst-italic">
          Самые свежие новости Новосибрской области
        </h3>
      </div>
      <div class="d-lg-flex d-none align-items-center">
        <img src="../icons/news-main.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

<?php
    $mysqli = new mysqli("localhost", "root", "root", "register-bg");
        if (isset($_GET) && isset($_GET["id"])) {
            if ($stmt = $mysqli->prepare("SELECT * FROM news WHERE id = ?")) {
                $stmt->bind_param("i", $_GET["id"]);
                $stmt->execute();
                $news = $stmt->get_result()->fetch_assoc();
            }
            else {
                $news = 0;
            }
        }
            
            if($news): ?>
        <div class="row mb-2">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
            <div class="mb-2 w-fit-content p-1 rounded-3 text-body-secondary border"><?=$news["date"]?></div>
            <h3 class="mb-2"><?=$news["title"]?></h3>
            <p><i class="text-body-secondary"><?=$news["preview"]?></i></p>
                <img src="<?=$news["img"]?>" class="d-block rounded-lg-5 rounded-3 mb-3 w-100" alt="(((">
                    <p class="card-text"><?=$news["text"]?></p>
                    <?php endif;?>
            </div>
            </div> 
        </div>
        <?php 
        if (isset($_SESSION['admin_access']) && $_SESSION['admin_access'] == true): ?>
          <button type="button" class="btn btn-dark w-25" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Удалить новость
</button>

<!-- Модальное окно -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Удаление новости</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        Вы действительно хотите удалить новость?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-danger"> <a style="color: white; text-decoration: none;" href="../scripts/delete.php?id=<?= $news["id"] ?>">Удалить</a></button>
      </div>
    </div>
  </div>
</div>
    <button type="button" class="btn btn-secondary mb-1">
                        <a style="color: white; text-decoration: none;" href="edit.php?id=<?= $news["id"] ?>">Редактировать новость</a>
                    </button>

    <?php endif;?>
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

<script src="../scripts/bootstrap.js"></script>

</body>
</html>