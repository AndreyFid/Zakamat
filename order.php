<?php 
include('db.php');
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

    <div class="wrapper">
      
      <div class="container">
        
        <div class="row"> 
          
          <div class="col-lg-9 col-lg-push-3">

            <?php

                   if(isset($_POST['test_1'])) {

                    if ($_POST['test_1']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['test_1'], ENT_QUOTES, 'UTF-8');
                    $variable = $variableFilter;
                     echo "заказано на ".$variable." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod_schetciki_bezreduktor');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                        
                        
                         $variable_q = $row['quantity'];
                         $variable_s = $variable_q*$variable;
                              
                         echo $row['name']. "  Итого = ".$variable_s." ".$row['unit']."<br>";
                        }}}
                ?> 
                <br>
                <?php

                   if(isset($_POST['vod32'])) {
                    if ($_POST['vod32']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod32'], ENT_QUOTES, 'UTF-8');
                    $variable = $variableFilter;
                     echo "заказано на ".$variable." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod32');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                        
                        
                         $variable_q = $row['quantity'];
                         $variable_s = $variable_q*$variable;
                              
                         echo $row['name']. "  Итого = ".$variable_s." ".$row['unit']."<br>";
                        }}}
                ?>
                <br>
                <?php

                   if(isset($_POST['vod25'])) {

                    if ($_POST['vod25']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod25'], ENT_QUOTES, 'UTF-8');
                    $variable = $variableFilter;
                     echo "заказано на ".$variable." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod25');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                        
                        
                         $variable_q = $row['quantity'];
                         $variable_s = $variable_q*$variable;
                              
                         echo $row['name']. "  Итого = ".$variable_s." ".$row['unit']."<br>";
                        }}}
                ?>




             
                            
          </div>


          </div>

           <div class="col-lg-3 col-lg-pull-9">
            
              
                
           </div>

          </div>

        </div>

      </div>

      <div class="clear">
        
      </div>

    </div>

<?php
    include('footer.php');
?>


    
  </body>