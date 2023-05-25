<?php
  include("parts/header.php")
?>

<div class="wraper">
  <section id="promo">
    <div>
      <h1>Выполните вход</h1>
      <div class="card">
        <div class="card-body">
          <form action="inc/autorizacia.php" method="post">
            <div class="mb-3">
              <label for="nick" class="form-label">Логин</label>
              <input type="text" class="form-control" name="nick">
            </div>
            <div class="mb-3">
              <label for="heslo" class="form-label">Пароль</label>
              <input type="password" class="form-control" name="heslo">
            </div>
            <button type="submit" class="btn btn-primary" name="prihlasenie">Вход</button>
          </form>
        </div>
      </div>
    </div>
  </section>
    
</div>

<?php
  include("parts/footer_f.php")
?>