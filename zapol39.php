<?php 
include('db.php');
?>

<?php 
    
    /* Проверяем, существуют ли переменные $_POST и если существуют, тогда обрабатываем данные POST от пользователя и переопределяем переменные $name и $author, присвоив им отфильтрованные значения от пользователя
    */
    if(isset($_POST['vod32'])) {
        
        $variableFilter = htmlspecialchars($_POST ['vod32'], ENT_QUOTES, 'UTF-8');
        $variable1 = $variableFilter;

        echo $variable1;

       session_start();
        $variable1 = $variable1;
        
          
        }
          



?>



<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ZakaMat</title>

    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
     <!--Main style -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
   include('header.php');
 ?>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tabs">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-1" data-toggle="tab">Водоснабжение</a></li>
              <li><a href="#tab-2" data-toggle="tab">Канализация</a></li>
              <li><a href="#tab-3" data-toggle="tab">Отопление</a></li>
            </ul>

            <div class="tab-content">

              <div class="tab-pane fade in active" id="tab-1"> <!-- Панель для заказа водоснабженея -->
                <form action="order_2.php" method="post" id="myForm">
                 <table class="table_zakaz">
                  <tr>
                    <th>Наименования</th>
                    <th>Количество этажей</th>
                  </tr>
                  <tr>
                    <td><a href="#">Вода типовой 32</a></td>
                    <td>
                      <div class="form-grup">                          
                        <input type="text" class="form-control" name="vod32" value="0"/>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="#">Вода типовой 25</a></td>
                      <td>
                        <div class="form-grup">                          
                          <input type="text" class="form-control" name="vod25" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a href="#">Рецеркуляция</a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="vod40_rec" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a href="#">Петли компенсационные</a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="vod40_rec_petli" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a href="#">Труба 32 транзинтная </a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="vod32_tranzit" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a href="#">Счетчики с редукторами </a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="vod_schetciki_reduktor" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a href="#">Счетчики без редукторов </a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="vod_schetciki_bezreduktor" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <tr>
                    <td><a href="#">Тест</a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="test_1" value="0"/>
                        </div>
                      </td>
                  </tr>
                  <!-- <tr>
                    <td><a href="#">Тех.этаж</a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="" value="0"/>
                        </div>
                      </td>
                  </tr> -->
                  <!-- <tr>
                    <td><a href="#">Цоколь</a></td>
                      <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="" value="0"/>
                        </div>
                      </td>
                  </tr> -->
                  <!-- <tr>
                    <td><a href="#">Переход 32-25</a></td>
                     <td>
                        <div class="form-grup">
                          <input type="text" class="form-control" name="" value="0"/>
                        </div>
                      </td>
                  </tr> -->
                 </table>
                </form>
                <div class="form-grup">
                <button class="btn" form="myForm" formaction="order_2.php" formmethod="POST"> Добавить в заявку</button>
                </div>
              </div>

              <div class="tab-pane fade" id="tab-2"> <!-- Панель для заказа канализации -->
                  <form action="order_2.php" method="post" id="zakKan">
                    <table class="table_zakaz">
                      <tr>
                        <th>Наименования</th>
                        <th>Количество этажей</th>
                      </tr>
                      <tr> 
                        <td><a href="#">Канализация с ревизией</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="kanal_reviz" value="0"/>
                          <!-- <input type="submit" class="btn" value="Добавить в заявку"/> -->
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td><a href="#">Канализация без ревизии</a></td>
                        <td>
                          <div class="form-grup">
                        
                          <input type="text" class="form-control" name="kanaliz_bez" value="0"/>
                          <!-- <input type="submit" class="btn" value="Добавить в заявку"/> -->
                          </div>
                       </td>
                      </tr>
                      <tr>
                        <td><a href="#">Ливневка стояки</a></td>
                        <td>
                          <div class="form-grup">
                        
                          <input type="text" class="form-control" name="kanaliz_livneva" value="0"/>
                          
                          </div>
                        </td>
                      </tr>
                      <!-- <tr>
                        <td><a href="#">Ливневка Тех.этаж</a></td>
                        <td>
                          <div class="form-grup">
                        
                          <input type="text" class="form-control" name="kanal_livnevaya_teh" value="0"/>
                          <input type="submit" class="btn" value="Добавить в заявку"/>
                          </div>
                        </td>
                      </tr> -->
                    </table>
                   </form>
                   <div class="form-grup">
                     <button class="btn" form="zakKan" formaction="order_2.php" formmethod="POST"> Добавить в заявку</button>
                   </div>
                  </div> 

              <div class="tab-pane fade" id="tab-3">  <!-- Панель для заказа отопления -->
                <form action="order_2.php" method="post" id="zakOtoplenie">
                    <table class="table_zakaz">
                      <tr>
                        <th>Наименования</th>
                        <th>Количество этажей</th>
                      </tr>
                      <tr> 
                        <td><a href="#">Радиаторы типовой этаж</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="otoplenie_tip" value="0"/>
                          </div>
                        </td>
                      </tr>
                      <tr> 
                        <td><a href="#">5 Литер радиаторы типовой</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="otoplenie_5l_radi" value="0"/>
                          </div>
                        </td>
                      </tr>
                      <tr> 
                        <td><a href="#">5 Литер раскатка типовой</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="otoplenie_5l_truba" value="0"/>
                          </div>
                        </td>
                      </tr>
                      <tr> 
                        <td><a href="#">2 литер 1,2 подьезд раскатка типовой</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="2_liter_1.2P_truba_tip" value="0"/>
                          </div>
                        </td>
                      </tr>
                      <tr> 
                        <td><a href="#">2 литер 1,2 подьезд радиаторы типовой</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="2_liter_1.2P_radiator_tip" value="0"/>
                          </div>
                        </td>
                      </tr>
                      <tr> 
                        <td><a href="#">2 литер 3 подьезд раскатка типовой</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="2_liter_3P_truba_tip" value="0"/>
                          </div>
                        </td>
                      </tr>
                      <tr> 
                        <td><a href="#">2 литер 3 подьезд радиаторы типовой</a></td>
                        <td>
                          <div class="form-grup">
                          <input type="text" class="form-control" name="2_liter_3P_radiator_tip" value="0"/>
                          </div>
                        </td>
                      </tr>

                      <!-- <tr>
                        <td><a href="#">Радиаторы 1 этаж</a></td>
                        <td>
                          <div class="form-grup">
                        
                          <input type="text" class="form-control" name="otoplenie1et" value="0"/>
                          <input type="submit" class="btn" value="Добавить в заявку"/>
                          </div>
                       </td>
                      </tr> -->
                      <!-- <tr>
                        <td><a href="#">Радиаторы цоколь</a></td>
                        <td>
                          <div class="form-grup">
                        
                          <input type="text" class="form-control" name="otoplenie0et" value="0"/>
                          <input type="submit" class="btn" value="Добавить в заявку"/>
                          </div>
                        </td>
                      </tr> -->
                      <tr>
                        <td><a href="#">Коллектора</a></td>
                        <td>
                          <div class="form-grup">
                        
                          <input type="text" class="form-control" name="kollektora" value="0"/>
                          <!-- <input type="submit" class="btn" value="Добавить в заявку"/> -->
                          </div>
                        </td>
                      </tr>
                    </table>
                   </form>
                   <div class="form-grup">
                     <button class="btn" form="zakOtoplenie" formaction="order_2.php" formmethod="POST"> Добавить в заявку</button>
                   </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>

       

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
<?php
    include('footer.php');
?>
  </body>
</html>