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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
     <!--Main style -->
    <link href="assets/css/style.css" rel="stylesheet">

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
              <li><a href="#tab-4" data-toggle="tab">Коллектора</a></li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab-1">
                 <table class="table_zakaz">
                <tr>
                  <th>Наименования</th>
                  <th>Количество этажей</th>
                </tr>
                <tr>
                  <td><a href="#">Вода типовой 32</a></td>
                    <td>
                      <div class="form-grup">
                        <form action="order_2.php" method="post">
                          <input type="text" class="form-control" name="vod32" value=""/>
                          <input type="submit" class="btn" value="Добавить в заявку"/>
                        </form>
                      </div>
                    </td>
                </tr>
                <tr>
                  <td><a href="#">Вода типовой 25</a></td>
                    <td>
                      <div class="form-grup">
                        <input type="text" class="form-control" value="0">
                      </div>
                    </td>
                </tr>
                <tr>
                  <td><a href="#">Рецеркуляция</a></td>
                    <td>
                      <div class="form-grup">
                        <input type="text" class="form-control" value="0">
                      </div>
                    </td>
                </tr>
                <tr>
                  <td><a href="#">Тех.этаж</a></td>
                    <td>
                      <div class="form-grup">
                        <input type="text" class="form-control" value="0">
                      </div>
                    </td>
                </tr>
                <tr>
                  <td><a href="#">Цоколь</a></td>
                    <td>
                      <div class="form-grup">
                        <input type="text" class="form-control" value="0">
                      </div>
                    </td>
                </tr>
                <tr>
                  <td><a href="#">Переход 32-25</a></td>
                   <td>
                      <div class="form-grup">
                        <input type="text" class="form-control" value="0">
                      </div>
                    </td>
                </tr>
              </table>
              </div>
              <div class="tab-pane fade" id="tab-2">
                <p>gfhfuhfa ntrcn 2</p>
              </div>
              <div class="tab-pane fade" id="tab-3">
                <p>gfhfuhfa ntrcn 3</p>
              </div>
              <div class="tab-pane fade" id="tab-4">
                <p>gfhfuhfa ntrcn 4</p>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>

       <input type="submit" class="btn" value="Добавить в заявку">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
<?php
    include('footer.php');
?>
  </body>
</html>