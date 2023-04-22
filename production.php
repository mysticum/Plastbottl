<?php
  include('parts/header.php');
?>
        <div class="wraper">
            <!-- Prepinačy -->
            <section id="promo">
                <div class="row justify-content-between">
                    <div id="selector" class="col-sm row" onclick="main(bottles_checkboxes, cards)">
                        <div>
                            <h5>Категории</h5>
                            <div class="btn-group-bottles" role="group1" name="bottles">
                                <input type="checkbox" class="btn-check" id="5,00l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="5,00l">5л</label>
                                <input type="checkbox" class="btn-check" id="2,00l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="2,00l">2л</label>
                                <input type="checkbox" class="btn-check" id="1,50l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="1,50l">1,5л</label>
                                <input type="checkbox" class="btn-check" id="1,00l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="1,00l">1л</label>
                                <input type="checkbox" class="btn-check" id="0,50l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="0,50l">0,5л</label>
                                <input type="checkbox" class="btn-check" id="0,35l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="0,35l">0,35л</label>
                                <input type="checkbox" class="btn-check" id="0,33l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="0,33l">0,33л</label>
                                <input type="checkbox" class="btn-check" id="0,25l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="0,25l">0,25л</label>
                                <br class="na-resp">
                                <input type="checkbox" class="btn-check" id="0,05l 0,10l" autocomplete="off">
                                <label class="btn btn-outline-primary" for="0,05l 0,10l">0,05-0,1л</label>
                                <input type="checkbox" class="btn-check" id="38mm" autocomplete="off">
                                <label class="btn btn-outline-primary" for="38mm">ø0,38</label>
                                <input type="checkbox" class="btn-check" id="jar" autocomplete="off">
                                <label class="btn btn-outline-primary" for="jar">Банки ø0,78</label>
                            </div>
                            <h5><br></h5>
                            <button type="button" class="btn btn-warning" id="clear" onclick = "clearChecks(bottles_checkboxes)">Очистить</button>
                            <h5><br></h5>
                        </div>
                    </div>
                    <div class="col-md-4" id="intro-slogan">
                        <h2>Наша продукция</h2>
                        <p>Трудно переоценить преимущество пластиковых бутылок перед  другими видами упаковки. Эти изделия обладают хорошей стойкостью к растворам
                            кислот, щелочей и другим агрессивным средам, атмосферным воздействиям, стойки к истиранию, вибрации и ударам. Помимо этого выпускаемые
                            нами изделия в среднем в 8 раз легче стеклотары. Это делает возможным применение ПЭТ-тары не только в пищевой промышленности, но и в
                            фармакологии, и в бытовой химии.
                        </p>
                        <p>Пластиковые бутылки на сегодняшний день являются не дорогой, современной, многофункциональной и неприхотливой в использовании тарой,
                            применяемой в разных отраслях деятельности. Нашими клиентами являются крупные торговые компании и большая сеть ресторанов и кафе.
                        </p>
                        <p>ООО «Пласт-Ботл» – компания, которая владеет полным и качественным  циклом производства Бутылок!</p>
                        <p>Наша размерная линейка включает в себя более 35 видов популярной ПЭТ тары</p>
                    </div>
                </div>
            </section>
            <!-- Katalóg -->
            <section>
                <div id="cards" class="row">
                    <div class="col-sm-2 card" id="0,50l 1,00l" style="width: 15rem;">
                        <img src="img/79_pet-butylka-1l05l--gorla-38mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5-1л</h5>
                            <p>Прозрачная, с пробкой, ø горла 38мм</p>
                            <h6>7,55₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l 1,00l" style="width: 15rem;">
                        <img src="img/43_butylka-dlya-moloka-05l-i-1l.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л-1л</h5>
                            <p>Белая, матовая, с пробкой, ø горла 38мм</p>
                            <h6>7,70₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,35l 0,33l 38mm" style="width: 15rem;">
                        <img src="img/45_pet-butylka-03l--gorla-38mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,3л</h5>
                            <p>Прозрачная, с пробкой, ø горла 38мм</p>
                            <h6>6,10₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,35l 0,33l 38mm" style="width: 15rem;">
                        <img src="img/80_butylka-dlya-moloka-03l.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,3л</h5>
                            <p>Белая, матовая, с пробкой, ø горла 38мм</p>
                            <h6>6,30₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l 38mm" style="width: 15rem;">
                        <img src="img/05trw.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л</h5>
                            <p>Прозрачная, с пробкой, ø горла 38мм</p>
                            <h6>7,55₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,35l 0,33l 38mm" style="width: 15rem;">
                        <img src="img/03sqrtrw.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title"> Бутылка 0,3л, квадратная</h5>
                            <p>Прозрачная, с пробкой, ø горла 38мм</p>
                            <h6>6,10₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l 38mm" style="width: 15rem;">
                        <img src="img/05sqrtrw.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л, квадратная</h5>
                            <p>Прозрачная, с пробкой, ø горла 38мм</p>
                            <h6>7,55₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,25 38mm" style="width: 15rem;">
                        <img src="img/025trw.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,25л</h5>
                            <p>Прозрачная, с пробкой, ø горла 38мм</p>
                            <h6>6,10₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="5,00l" style="width: 15rem;">
                        <img src="img/42_pet-butylka-5l-pryamougolnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 5л</h5>
                            <p>Прямоугольная, с пробкой</p>
                            <h6>22₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="2,00l" style="width: 15rem;">
                        <img src="img/50_pet-butylka-2l-gladkaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 2л</h5>
                            <p>Гладкая, с пробкой, ø горла 24мм</p>
                            <h6>9,95₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="2,00l" style="width: 15rem;">
                        <img src="img/49_pet-butylka-2l-gladkaya--gorla-24mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 2л, коричневая</h5>
                            <p>Гладкая, с пробкой, ø горла 24мм</p>
                            <h6>10,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,50l" style="width: 15rem;">
                        <img src="img/51_pet-butylka-15l--gorla-24mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1,5л c перетяжкой</h5>
                            <p>Прозрачная, с пробкой, ø горла 24мм</p>
                            <h6>9,95₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,50l" style="width: 15rem;">
                        <img src="img/52_pet-butylka-15l-rebristaya-gorla-24mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1,5л</h5>
                            <p>Ребристая, с пробкой, ø горла 24мм</p>
                            <h6>9,95₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,50l" style="width: 15rem;">
                        <img src="img/53_pet-butylka-15l.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1,5л, с перетяжнкой</h5>
                            <p>Коричневая, с пробкой, ø горла 24мм</p>
                            <h6>10,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,50l" style="width: 15rem;">
                        <img src="img/52_pet-butylka-15l-rebristaya-gorla-24mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1,5л</h5>
                            <p>Ребристая, с пробкой, ø горла 24мм</p>
                            <h6>9,95₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,00l" style="width: 15rem;">
                        <img src="img/54_pet-butylka-1l-gladkaya-prozrachnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1л</h5>
                            <p>Гладкая, с пробкой, ø горла 24мм</p>
                            <h6>8,55₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,00l" style="width: 15rem;">
                        <img src="img/55_pet-butylka-1l-gladkaya-korichnevaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1л</h5>
                            <p>Коричневая, с пробкой, ø горла 24мм</p>
                            <h6>9,60₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,00l" style="width: 15rem;">
                        <img src="img/56_pet-butylka-1l-gladkaya-zelenaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1л</h5>
                            <p>Зелёная, с пробкой, ø горла 24мм</p>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,00l" style="width: 15rem;">
                        <img src="img/57_pet-butylka-1l-rebristaya-prozrachnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1л</h5>
                            <p>Ребристая, с пробкой, ø горла 24мм</p>
                            <h6>8,55₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,00l" style="width: 15rem;">
                        <img src="img/58_pet-butylka-1l-ploskaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1л</h5>
                            <p>Плоская, с пробкой, ø горла 24мм</p>
                            <h6>9,50₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="1,00l" style="width: 15rem;">
                        <img src="img/59_pet-butylka-1l-ploskaya-s-krestom.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 1л</h5>
                            <p>Плоская, с крестом, с пробкой, ø горла 24мм</p>
                            <h6>9,50₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l" style="width: 15rem;">
                        <img src="img/62_pet-butylka-05l-kvadratnaya-gorla-24mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л</h5>
                            <p>Квадратная, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l" style="width: 15rem;">
                        <img src="img/63_pet-butylka-05-l---gorla-38mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л</h5>
                            <p>Плоская, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l" style="width: 15rem;">
                        <img src="img/78_pet-butylka-05l-ploskaya--gorla-24-mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л</h5>
                            <p>Плоская, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,50l" style="width: 15rem;">
                        <img src="img/60_pet-butylka-05l-gladkaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,5л</h5>
                            <p>Прозрачная, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,35l" style="width: 15rem;">
                        <img src="img/65_pet-butylka-035l02l--gorla-24mm-korichnevaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,35л</h5>
                            <p>Коричневая, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,33l" style="width: 15rem;">
                        <img src="img/66_pet-butylka-033l-gladkaya--gorla-24mm.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,33л</h5>
                            <p>Гладкая, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,33l" style="width: 15rem;">
                        <img src="img/70_pet-butylka-025l--rebristaya-gorla-24mm-prozrachnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,33л</h5>
                            <p>Ребристая, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,25l" style="width: 15rem;">
                        <img src="img/69_pet-butylka-025l-gladkaya-gorla-24mm-prozrachnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,25л</h5>
                            <p>Гладкая, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,25l" style="width: 15rem;">
                        <img src="img/70_pet-butylka-025l--rebristaya-gorla-24mm-prozrachnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,25л</h5>
                            <p>Ребристая, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,05l 0,10l" style="width: 15rem;">
                        <img src="img/71_pet-butylka-01l--gorla-24mm-prozrachnaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,1л</h5>
                            <p>Ребристая, с пробкой, ø горла 24мм</p>
                            <h6>7,15₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="0,05l 0,10l" style="width: 15rem;">
                        <img src="img/72_pet-butylka-005l--gorla-24mm-zelenaya.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Бутылка 0,05л</h5>
                            <p>Зелёная, с пробкой, ø горла 24мм</p>
                            <h6>6,20₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="jar" style="width: 15rem;">
                        <img src="img/73_pet-banka-075l--gorla-78mm-prozrachnaya-s-krasnoy-kryshkoy.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Банка 0,75л</h5>
                            <p>Прозрачная, с крышкой, ø горла 78мм</p>
                            <h6>14₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="jar" style="width: 15rem;">
                        <img src="img/74_pet-banka-05l--gorla-78mm-prozrachnaya-s-krasnoy-kryshkoy.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Банка 0,5л</h5>
                            <p>Прозрачная, с крышкой, ø горла 78мм</p>
                            <h6>12₽</h6>
                        </div>
                    </div>
                    <div class="col-sm-2 card" id="jar" style="width: 15rem;">
                        <img src="img/75_pet-banka-025l--gorla-78mm-prozrachnaya-s-krasnoy-kryshkoy.jpg" class="card-img-top card-img">
                        <div class="card-body">
                            <h5 class="card-title">Банка 0,25л</h5>
                            <p>Прозрачная, с крышкой, ø горла 78мм</p>
                            <h6>11₽</h6>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- Skript na prepinačy -->
        <script src="js/app.js"></script>
<?php
    include("parts/footer.php")
?>