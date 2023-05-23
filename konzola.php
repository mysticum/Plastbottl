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
                        <th>Объём</th>
                        <th>Диаметр</th>
                        <th>Описание</th>
                        <th>Изображение</th>
                        <th>Выполнить</th>
                      </thead>
                      <tbody>
                        <?php foreach($results as $res): ?>

                            <tr>
                              <th><?php echo $res->id; ?></th>
                              <td><?php echo $res->nazov; ?></td>
                              <td><?php echo $res->cena; ?></td>
                              <td><?php echo $res->objem; ?></td>
                              <td><?php echo $res->diametr; ?></td>
                              <td><?php echo $res->popis; ?></td>
                              <td><a href="<?php echo "img/".$res->image;?> ">Просмотр</a></td>
                              <td>
                                <a class="btn btn-warning" data-toggle="modal" data-target="#edit_<?php echo $res->id; ?>"><span class="material-symbols-outlined">edit</span></a>
                                <a class="btn btn-danger" data-toggle="modal" data-target="#del_<?php echo $res->id; ?>"><span class="material-symbols-outlined">backspace</span></a>
                              </td>
                            </tr>

                            <!-- Modálne okno redaktovania továru -->
                            <div class="modal fade" tabindex="-1" role="dialog" id="edit_<?php echo $res->id; ?>">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content shadow">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Редактировать товар №<?php echo $res->id; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="inc/foo.php" method="post">
                                    <div class="form-group" style="display:none;">
                                      <small><b>ИД</b></small>
                                      <input type="text" class="form-control" name="id" value="<?php echo $res->id; ?>" >
                                    </div>
                                      <div class="form-group">
                                        <small><b>Наименование</b></small>
                                        <input type="text" class="form-control" name="nazov" value="<?php echo $res->nazov; ?>">
                                      </div>
                                      <div class="form-group">
                                        <small><b>Цена</b></small>
                                        <input type="text" class="form-control" name="cena" value="<?php echo $res->cena; ?>">
                                      </div>
                                      <div class="form-group">
                                        <small><b>Объём/банка</b></small>
                                        <input type="text" class="form-control" name="objem" value="<?php echo $res->objem; ?>">
                                      </div>
                                      <div class="form-group">
                                        <small><b>Диаметр горла</b></small>
                                        <input type="text" class="form-control" name="diametr" value="<?php echo $res->diametr; ?>">
                                      </div>
                                      <div class="form-group">
                                        <small><b>Описание</b></small>
                                        <textarea name="popis" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $res->popis;?></textarea>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                    <button type="submit" name="opravit_produkt" class="btn btn-primary">Выполнить</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                            <!-- Modálne okno odstranenia továru -->
                            <div class="modal fade" tabindex="-1" role="dialog" id="del_<?php echo $res->id; ?>">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content shadow">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Удалить товар №<?php echo $res->id; ?>?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="inc/foo.php" method="post">
                                    <div class="form-group" style="display:none;">
                                      <small><b>ИД</b></small>
                                      <input type="text" class="form-control" name="id" value="<?php echo $res->id; ?>" >
                                    </div>
                                    <?php echo $res->nazov; ?>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                                    <button type="submit" name="odstranit_produkt" class="btn btn-danger">Выполнить</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                </div>
            </section>
        </div>
        
        <!-- Modálne okno pridania továru -->
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
                <form action="inc/foo.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <small><b>Наименование</b></small>
                    <input type="text" class="form-control" name="nazov" placeholder="Полное наименование товара">
                  </div>
                  <div class="form-group">
                    <small><b>Цена</b></small>
                    <input type="text" class="form-control" name="cena" placeholder="В копейках">
                  </div>
                  <div class="form-group">
                    <small><b>Объём/банка</b></small>
                    <input type="text" class="form-control" name="objem" placeholder="Если банка — 0, в миллилитрах">
                  </div>
                  <div class="form-group">
                    <small><b>Диаметр горла</b></small>
                    <input type="text" class="form-control" name="diametr" placeholder="В миллиметрах">
                  </div>
                  <div class="form-group">
                    <small><b>Описание</b></small>
                    <textarea name="popis" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Цвет, форма, прочее..."></textarea>
                  </div>
                  <div class="form-group">
                    <small><b>Изображение</b></small>
                    <input class="form-control" type="file" name="image">
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