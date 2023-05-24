<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="ru">
        <title>ПК ООО «Пласт-Боттл»</title>
        <meta name="viewport" content="width=device-width">
        <!-- Vlastný CSS -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    </head>
    <body>
        <!-- Navigácia -->
        <header>
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.php"><img id="logo" src="./img/logo.png" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Домашняя</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="production.php">Продукция</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Контакты</a>
                        </li>
                    </ul>
                    </div>
                    <a class="btn btn-primary order-button" data-toggle="modal" data-target="#ziadost">Оставить заявку</a>
                </div>
              </nav>
        </header>

        <!-- Modálne okno prijatia žiadostí -->
        <div class="modal fade" tabindex="-1" role="dialog" id="ziadost">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
              <div class="modal-header">
                <h5 class="modal-title">Оставить заявку</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="inc/foo.php" method="post">
                  <p>Заполните, пожалуйста, форму. Мы обязательно с вами свяжемся.</p>
                  <div class="form-group">
                    <small><b>Как к вам можно обращатся?</b></small>
                    <input type="text" class="form-control" name="meno" placeholder="">
                  </div>
                  <div class="form-group">
                    <small><b>Что вас заинтересовало?</b></small>
                    <textarea name="popis" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Продукция, скидки, прочее..."></textarea>
                  </div>
                  <div class="form-group">
                    <small><b>В какой регион хотите получить доставку?</b></small>
                    <input type="text" class="form-control" name="region" placeholder="Город, район">
                  </div>
                  <div class="form-group">
                    <small><b>Как с вами связаться?а</b></small>
                    <input type="text" class="form-control" name="kontakt" placeholder="Телефон, почта">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="submit" name="nova_ziadost" class="btn btn-primary">Выполнить</button>
              </div>
              </form>
            </div>
          </div>
	      </div>

        <main>