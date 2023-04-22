<?php
  include('parts/header.php');
?>
            <div class="wraper">
            <section id="promo">
                <div>
                    <h1>Консоль <button class="btn btn-outline-success" data-toggle="modal" data-target="#create"><span class="material-symbols-outlined">add</span></button></h1>
                    <table class="table table-striped table-hover">
                      <thead class="table-primary">
                        <th>ИД</th>
                        <th>Наименование</th>
                        <th>Цена</th>
                        <th>Изображение</th>
                        <th>Выполнить</th>
                      </thead>
                      <tbody>
                        <tr>
                          <th>1</td>
                          <td>Бутылка 1л</td>
                          <td>5р</td>
                          <td>null</td>
                          <td>
                            <a href="" class="btn btn-warning"><span class="material-symbols-outlined">edit</span></a>
                            <a href="" class="btn btn-danger"><span class="material-symbols-outlined">backspace</span></a>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="createE" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Добавление продукта</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <div class="form-group">
                    <small>Наименование</small>
                    <input type="text" class="form-control" name="Наименование">
                  </div>
                  <div class="form-group">
                    <small>Цена</small>
                    <input type="text" class="form-control" name="Цена">
                  </div>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  <button type="submit" class="btn btn-primary" name="add">Отправить</button>
                </form>
              </div>
              <div class="modal-footer">
              </div>
            </div>
          </div>
        </div>
<?php
    include("parts/footer.php")
?>