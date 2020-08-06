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

    <div class="container-fluid">
      <div class="row">

        
        <nav role="navigation" class="navbar navbar-inverse">
          <div class="container">


            <div class="navbar-header header">
              
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <h1><a href="#">ZAKAMAT</a></h1>
                    <p>быстрые заявки</p>
                  </div>
                </div>
              </div>

              <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                
                <span class="sr-only">Tooggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>

            </div>
            <div id="navbarCollapse" class="collapse navbar-collapse navbar-right">
              
              <ul class="nav nav-pills"> 
                <li class="active"> <a href="#">Главное</a></li>
                <li><a href="#">Снабжение</a></li>
              </ul>
             </div>
            </div>
           </nav>
          </div>
       

      </div>
    </div>

    <div class="wrapper">
      
      <div class="container">

        
        <div class="row">
          
          <div class="col-lg-9 col-lg-push-3">
            asff
          </div>

           <div class="col-lg-3 col-lg-pull-9">
            
               <div class="panel panel-info">
                <div class="panel-heading"><div class="sidebar-header">Выбор обьекта</div></div>
                <div class="panel-body">
                    
                    <ul class="list-group">
                      <li class="list-group-item"><a href="assets/vod_2.php">Заполярная 39</a></li>
                      <li class="list-group-item">Краски</li>
                      <li class="list-group-item">Ипподром</li>
                    </ul>

                </div>
               </div>

          </div>

        </div>

      </div>

      <div class="clear">
        
      </div>

    </div>

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
                 <table>
                <tr>
                  <th>Наименования</th>
                  <th>Количество этажей</th>
                </tr>
                <tr>
                  <td><a href="#">Вода типовой 32</a></td>
                    <td>
                      <div class="form-grup">
                        <input type="text" class="form-control" value="0">
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

                <?php  

		/*print_r($_POST);
		$mysqli = new mysqli('localhost', 'root', '', 'kinomonstr');*/

	if(mysqli_connect_errno()) {
		prinf("соединение не установлено", mysqli_connect_error());
		exit();
	}

	$name = $_POST['name'];
	$author = $_POST['author'];

	$mysqli->set_charset('utf8');

		$query = "INSERT INTO `music` (`id`, `name`, `author`) VALUES (NULL, '$name', '$author')";
		$mysqli->query($query);

	?>
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
  
  <footer>
    
    <div class="container">
      
      <p class="text-center"><a href="#">ZAKAMAT</a></p>

    </div>

  </footer>

    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
