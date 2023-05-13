<?php
  include('parts/header.php');
?>
            <div class="wraper">
            <section id="promo">
                <div>
                    <h1>Консоль</h1>
                    <?php include('inc/foo.php');?>
                    <form action="" method="post">
                      <small><b>Наименование</b></small>
                      <input type="text" class="form-control" id="nazov" placeholder="Полное название прописью">
                      <small><b>Цена</b></small>
                      <input type="text" class="form-control" id="cena" placeholder="В копейках"><br>
                      <button type="submit" name"submit" class="btn btn-success"><span class="material-symbols-outlined">add</span> Отправить</button>
                    </form>
                    <br>
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
<?php
    include("parts/footer.php")
?>