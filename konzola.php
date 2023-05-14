<?php
  include('parts/header.php');
?>
            <div class="wraper">
            <section id="promo">
                <div>
                    <h1>Консоль
                      <button class="btn btn-success mb-1" data-toggle="modal" data-target="#Modal"><span class="material-symbols-outlined">add</span></button>
                    </h1>
                    <?php include('inc/foo.php');?>
                    <table class="table table-striped table-hover">
                      <thead class="table-primary">
                        <th>ИД</th>
                        <th>Наименование</th>
                        <th>Цена</th>
                        <th>Изображение</th>
                        <th>Выполнить</th>
                      </thead>
                      <tbody>
                        <?php
                          foreach($results as $res){
                            echo 
                            '<tr>
                              <th>'.$res->id.'</th>
                              <td>'.$res->nazov.'</td>
                              <td>'.$res->cena.'</td>
                              <td><a href="img/'.$res->image.'">Просмотр</a></td>
                              <td>
                                <a href="" class="btn btn-warning"><span class="material-symbols-outlined">edit</span></a>
                                <a href="" class="btn btn-danger"><span class="material-symbols-outlined">backspace</span></a>
                              </td>
                            </tr>';
                          }
                        ?>
                      </tbody>
                    </table>
                </div>
            </section>
        </div>

        <div class="modal fade" tabindex="-1" role="dialog" id="Modal">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content shadow">
              <div class="modal-header">
                <h5 class="modal-title">Добавить товар</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="inc/foo.php" method="post">
                  <div class="form-group">
                    <small><b>Наименование</b></small>
                    <input type="text" class="form-control" name="nazov" value="" placeholder="Полное наименование товара">
                  </div>
                  <div class="form-group">
                    <small><b>Цена</b></small>
                    <input type="text" class="form-control" name="cena" value="" placeholder="В копейках">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="submit" name="add_produkt" class="btn btn-primary">Выполнить</button>
              </div>
              </form>
            </div>
          </div>
	      </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php
    include("parts/footer.php")
?>