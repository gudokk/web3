<?php
  session_start();
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Новости</title>
    <link href="logos/favicon.png" rel="icon">
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid px-0">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                    class="active" aria-current="true" aria-label="Slide 1">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3">
            </button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4">
            </button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="pages/news1.html">
                    <img src="images/news-1.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h4>
                        В Новосибирске открылась IKEA со всего мира
                    </h4>
                </div>
            </div>
            <div class="carousel-item">
                <a href="pages/news2.html">
                    <img src="images/news-2.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h4>
                        60-этажный небоскрёб задумали построить на берегу Оби в Новосибирске
                    </h4>
                </div>
            </div>
            <div class="carousel-item">
                <a href="pages/news3.html">
                    <img src="images/news-3.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h4>
                        Рестораторы объяснили рост числа заведений грузинской кухни
                    </h4>
                </div>
            </div>
            <div class="carousel-item">
                <a href="pages/news4.html">
                    <img src="images/news-4.jpg" class="d-block w-100" alt="...">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <h4>
                        На Новосибирск надвигается потепление
                    </h4>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>
</div>

<div class="container d-none d-md-block">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <h1 class="display-4 fst-italic text-center">Вести Сибири</h1>
        </div>
    </header>
</div>

<nav class="d-md-none navbar sticky-top border-1 bg-white border-bottom my-2 border-black">
    <div class="container">
        <a class="navbar-brand fw-medium" href="index.php">Вести Сибири</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar"
             aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Меню</h5>
                <button type="button" class="btn-close mr-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item nav-link link-body-emphasis border p-3 rounded-3">
                        <a class="text-decoration-none my-2 text-black" href="index.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-house mr-1 text-primary"></i>
                                    Главная страница
                                </div>
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </a>
                    </li>
                    <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                        <a class="text-decoration-none my-2 text-black" href="pages/news.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-newspaper mr-1 text-primary"></i>
                                    Новости
                                </div>
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </a>
                    </li>
                    <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                        <a class="text-decoration-none my-2 text-black" href="pages/contacts.php">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <i class="bi bi-chat-square mr-1 text-primary"></i>
                                    Контакты
                                </div>
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </a>
                    </li>
                  <?php
                    if (isset($_COOKIE['user']) && $_COOKIE['user'] != ''):
                      ?>
                        <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                            <a class="text-decoration-none my-2 text-black" href="scripts/exit.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-box-arrow-left mr-1 text-primary"></i>
                                        Выйти
                                    </div>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                    <?php else: ?>
                        <li class="mt-3 nav-item nav-link link-body-emphasis border p-3 rounded-3">
                            <a class="text-decoration-none my-2 text-black" href="pages/registration.php">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <i class="bi bi-box-arrow-right mr-1 text-primary"></i>
                                        Регистрация
                                    </div>
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="d-none d-md-block container sticky-top">
    <div class="nav-scroller bg-white py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between px-1">
            <a class="nav-item nav-link link-body-emphasis active" href="index.php">Главная страница</a>
            <a class="nav-item nav-link link-body-emphasis" href="pages/news.php">Новости</a>
            <a class="nav-item nav-link link-body-emphasis" href="pages/contacts.php">Контакты</a>
          <?php
            if (isset($_COOKIE['user']) && $_COOKIE['user'] != ''):
              ?>
                <a class="nav-item nav-link link-body-emphasis" href="scripts/exit.php">Выйти</a>
            <?php else: ?>
                <a class="nav-item nav-link link-body-emphasis" href="pages/registration.php">Регистрация</a>
            <?php endif; ?>
        </nav>
    </div>
</div>

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded-lg-5 rounded-3 text-body-emphasis bg-body-secondary">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom overflow-hidden text-center rounded-3">
                <li class="breadcrumb-item active">
                    <a class="link-body-emphasis fw-semibold text-decoration-none" href="#">
                        <i class="bi bi-house"></i>
                        Главная страница
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
                <img src="icons/news-main.png" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <div>
      <?php
        if (isset($_SESSION['admin_access']) && $_SESSION['admin_access'] == true): ?>
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark mb-3" href="pages/create.php" role="button">Добавление новостей</a>
            </div>
        <?php endif; ?>
      <?php
        $_SESSION['admin_acess'] = ""
      ?>
    </div>
  <?php
    $news_on_page = 2;
    $mysqli = new mysqli('localhost', 'root', 'root', 'register-bg');
    $query = "SELECT COUNT(*) as c FROM news";
    $result = $mysqli->query($query)->fetch_object();
    $num = ceil((int)$result->c[0] / $news_on_page);

    if (isset($_GET['p'])) {
      $p = $_GET['p'];
    } else {
      $p = 1;
    }
    $p = (int)$p;
    if ($p === 0 || $p < 1) {
      $p = 1;
    }
    if ($p > $num) {
      $p = $num;
    }
    $startRow = ($p - 1) * $news_on_page;


    $stmt = $mysqli->prepare("SELECT * FROM news LIMIT ?, ?");
    $stmt->bind_param("ii", $startRow, $news_on_page);
    $stmt->execute();
    $result = $stmt->get_result();
    $news = array();
    while ($row = $result->fetch_assoc()) {
      $news[] = $row;
    }
    $i = 0;
  ?>

    <div class="d-grid banner-wrapper_two banner-gap">
      <?php
        foreach ($news as &$oneNews) {
          ?>
            <div class="banner-flying row g-0 border rounded">
                <div class="p-4 d-flex flex-column justify-content-between">
                    <div>
                        <div class="mb-2 text-body-secondary"><?= $oneNews["date"] ?></div>
                        <img src="<?= $oneNews["img"] ?>" class="rounded float-end mb-2 img-thumbnail" alt="(((">
                        <h3 class="card-text mb-3"><?= $oneNews["title"] ?></h3>
                        <p class="card-text mb-3"><?= $oneNews["preview"] ?></p>
                    </div>
                    <a href="pages/newss.php?id=<?= $oneNews["id"] ?>" class="btn btn-primary more">
                        Продолжить чтение
                    </a>
                </div>
            </div>
          <?php
        }
      ?>
    </div>

    <div class="text-center mt-3">
        <a href="<?php echo "?p=" . ($p - 1) ?>" class=" <?php if ($p == 1) {
          echo 'disabled';
        } ?> btn btn-light more mb-1">Предыдущая страница</a>
        <a href="<?php echo "?p=" . ($p + 1) ?>" class=" <?php if ($p == $num) {
          echo 'disabled';
        } ?> btn btn-light more mb-1">Следующая страница</a>
    </div>
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