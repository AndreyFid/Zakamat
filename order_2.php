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
             
             <div> <!-- код для водоснабжение -->
                <?php 
                  if(isset($_POST['vod32'])) {
                    if ($_POST['vod32']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod32'], ENT_QUOTES, 'UTF-8');
                    $variable32 = $variableFilter;
                     echo "Заказано на ".$variable32." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod32');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable32_q = $row['quantity'];
                         $variable32_s = $variable32_q*$variable32;
                            
                         
                        
                         echo $row['name']. "  Итого = ".$variable32_s." ". $row['unit']."<br>";
                        }}}
                ?> 

                <br> 

                <?php

                   if(isset($_POST['vod25'])) {

                    if ($_POST['vod25']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod25'], ENT_QUOTES, 'UTF-8');
                    $variable25 = $variableFilter;
                     echo "заказано на ".$variable25." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod25');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable25_q = $row['quantity'];
                         $variable25_s = $variable25_q*$variable25;
                              
                         echo $row['name']. "  Итого = ".$variable25_s." ". $row['unit']."<br>";
                        }}}
                ?> 

                 <br> 
            
                <?php

                   if(isset($_POST['vod40_rec'])) {

                    if ($_POST['vod40_rec']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod40_rec'], ENT_QUOTES, 'UTF-8');
                    $variable_vod40_rec = $variableFilter;
                     echo "заказано на ".$variable_vod40_rec." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod40_rec');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_vod40_rec_q = $row['quantity'];
                         $variable_vod40_rec_s = $variable_vod40_rec_q*$variable_vod40_rec;
                              
                         echo $row['name']. "  Итого = ".$variable_vod40_rec_s." ". $row['unit']."<br>";
                        }}}
                ?> 

                 <br> 
            
                <?php

                   if(isset($_POST['vod40_rec_petli'])) {

                    if ($_POST['vod40_rec_petli']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod40_rec_petli'], ENT_QUOTES, 'UTF-8');
                    $variable_vod40_rec_petli = $variableFilter;
                       
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod40_petli');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_vod40_rec_petli_q = $row['quantity'];
                         $variable_vod40_rec_petli_s = $variable_vod40_rec_petli_q*$variable_vod40_rec_petli;
                              
                         echo $row['name']. "  Итого = ".$variable_vod40_rec_petli_s." ". $row['unit']."<br>";
                        }}}
                ?> 

                <br> 
            
                <?php

                   if(isset($_POST['vod32_tranzit'])) {

                    if ($_POST['vod32_tranzit']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod32_tranzit'], ENT_QUOTES, 'UTF-8');
                    $variable_vod32_tranzit = $variableFilter;
                     echo "заказано на ".$variable_vod32_tranzit." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod32_tranzit');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_vod32_tranzit_q = $row['quantity'];
                         $variable_vod32_tranzit_s = $variable_vod32_tranzit_q*$variable_vod32_tranzit;
                              
                         echo $row['name']. "  Итого = ".$variable_vod32_tranzit_s." ". $row['unit']."<br>";
                        }}}
                ?> 

                <br> 
            
                <?php

                   if(isset($_POST['vod_schetciki_reduktor'])) {

                    if ($_POST['vod_schetciki_reduktor']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod_schetciki_reduktor'], ENT_QUOTES, 'UTF-8');
                    $variable_vod_schetciki_reduktor = $variableFilter;
                     echo "заказано на ".$variable_vod_schetciki_reduktor." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod_schetciki_reduktor');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_vod_schetciki_reduktor_q = $row['quantity'];
                         $variable_vod_schetciki_reduktor_s = $variable_vod_schetciki_reduktor_q*$variable_vod_schetciki_reduktor;
                              
                         echo $row['name']. "  Итого = ".$variable_vod_schetciki_reduktor_s." ". $row['unit']."<br>";
                        }}}
                ?> 

                <br> 
            
                <?php

                   if(isset($_POST['vod_schetciki_bezreduktor'])) {

                    if ($_POST['vod_schetciki_bezreduktor']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['vod_schetciki_bezreduktor'], ENT_QUOTES, 'UTF-8');
                    $variable_vod_schetciki_bezreduktor = $variableFilter;
                     echo "заказано на ".$variable_vod_schetciki_bezreduktor." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod_schetciki_bezreduktor');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_vod_schetciki_bezreduktor_q = $row['quantity'];
                         $variable_vod_schetciki_bezreduktor_s = $variable_vod_schetciki_bezreduktor_q*$variable_vod_schetciki_bezreduktor;
                              
                         echo $row['name']. "  Итого = ".$variable_vod_schetciki_bezreduktor_s." ".$row['unit']."<br>";
                        }}}
                ?> 
                
                <?php

                   if(isset($_POST['test_1'])) {

                    if ($_POST['test_1']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['test_1'], ENT_QUOTES, 'UTF-8');
                    $variable_test_1 = $variableFilter;
                     echo "заказано на ".$variable_test_1." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_vod_schetciki_bezreduktor');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_test_1_q = $row['quantity'];
                         $variable_test_1_s = $variable_test_1_q*$variable_test_1;
                              
                         echo $row['name']. "  Итого = ".$variable_test_1_s." ".$row['unit']."<br>";
                        }}}
                ?>

             </div> 

             <br>

             <div> <!-- код для канализации -->
                  <?php
                   if(isset($_POST['kanal_reviz'])) {
                    if ($_POST['kanal_reviz']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['kanal_reviz'], ENT_QUOTES, 'UTF-8');
                     $variablekanal_reviz = $variableFilter;
                      echo "заказано на ".$variablekanal_reviz." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_kanaliz_reviz');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variablekanal_reviz_q = $row['quantity'];
                         $variablekanal_reviz_s = $variablekanal_reviz_q*$variablekanal_reviz;
                              
                         echo $row['name']. "  Итого=".$variablekanal_reviz_s. $row['unit']."<br>";
                     }}}                                                   
                    ?> 

                    <br>
            
                 <?php

                   if(isset($_POST['kanaliz_bez'])) {

                    if ($_POST['kanaliz_bez']>0) {
                    
                    $variableFilter = htmlspecialchars($_POST ['kanaliz_bez'], ENT_QUOTES, 'UTF-8');
                    $variable_kanaliz_bez = $variableFilter;
                     echo "заказано на ".$variable_kanaliz_bez." этажа"."<br>";  
                   
                      $query = $mysqli -> query('SELECT * FROM zapol39_kanaliz_bez');
                        
                         while ($row=mysqli_fetch_assoc($query)){
                             /*echo $row['name']."    Итого=" ."<br>";*/
                        
                         $variable_kanaliz_bez_q = $row['quantity'];
                         $variable_kanaliz_bez_s = $variable_kanaliz_bez_q*$variable_kanaliz_bez;
                              
                         echo $row['name']. "  Итого = ".$variable_kanaliz_bez_s." ". $row['unit']."<br>";
                        }}}
                   ?> 

                   <br> 

                  <?php
                   if(isset($_POST['kanaliz_livneva'])) {
                    if ($_POST['kanaliz_livneva']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['kanaliz_livneva'], ENT_QUOTES, 'UTF-8');
                     $variable_kanaliz_livneva = $variableFilter;
                      echo "заказано на ".$variable_kanaliz_livneva." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_kanaliz_livneva');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_kanaliz_livneva_q = $row['quantity'];
                         $variable_kanaliz_livneva_s = $variable_kanaliz_livneva_q*$variable_kanaliz_livneva;
                              
                         echo $row['name']. "  Итого=".$variable_kanaliz_livneva_s. $row['unit']."<br>";
                   }}}                                                   
                  ?>

                  <br> 

             </div>

             <div> <!-- кол для отопеление -->
                 <?php
                   if(isset($_POST['otoplenie_tip'])) {
                    if ($_POST['otoplenie_tip']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['otoplenie_tip'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_tip = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_tip." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_otoplenie');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_tip_q = $row['quantity'];
                         $variable_otoplenie_tip_s = $variable_otoplenie_tip_q*$variable_otoplenie_tip;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_tip_s. $row['unit']."<br>";
                   }}}                                                   
                  ?> 

                  <br>

                  <?php
                   if(isset($_POST['kollektora'])) {
                    if ($_POST['kollektora']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['kollektora'], ENT_QUOTES, 'UTF-8');
                     $variable_kollektora = $variableFilter;
                      echo "заказано на ".$variable_kollektora." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_kolektor');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_kollektora_q = $row['quantity'];
                         $variable_kollektora_s = $variable_kollektora_q*$variable_kollektora;
                              
                         echo $row['name']. "  Итого = ".$variable_kollektora_s. $row['unit']."<br>";
                   }}}                                                   
                  ?> 

                  
                  

                  <?php
                   if(isset($_POST['otoplenie_5l_radi'])) {
                    if ($_POST['otoplenie_5l_radi']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['otoplenie_5l_radi'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_5l_radi = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_5l_radi." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_otoplenie_5l_radi');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_5l_radi_q = $row['quantity'];
                         $variable_otoplenie_5l_radi_s = $variable_otoplenie_5l_radi_q*$variable_otoplenie_5l_radi;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_5l_radi_s. $row['unit']."<br>";
                   }}}                                                   
                  ?> 

                  <br>

                  <?php
                   if(isset($_POST['otoplenie_5l_truba'])) {
                    if ($_POST['otoplenie_5l_truba']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['otoplenie_5l_truba'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_5l_truba = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_5l_truba." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_otoplenie_5l_truba');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_5l_truba_q = $row['quantity'];
                         $variable_otoplenie_5l_truba_s = $variable_otoplenie_5l_truba_q*$variable_otoplenie_5l_truba;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_5l_truba_s. $row['unit']."<br>";
                   }}}                                                   
                  ?> 

                  <br>

                  <?php
                   if(isset($_POST['2_liter_1_2P_truba_tip'])) {
                    if ($_POST['2_liter_1_2P_truba_tip']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['2_liter_1_2P_truba_tip'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_5l_truba = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_5l_truba." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_2_liter_1p_2p_otoplenie_truba_tip');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_5l_truba_q = $row['quantity'];
                         $variable_otoplenie_5l_truba_s = $variable_otoplenie_5l_truba_q*$variable_otoplenie_5l_truba;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_5l_truba_s. $row['unit']."<br>";
                   }}}                                                   
                  ?>

                  <br>

                  <?php
                   if(isset($_POST['2_liter_1_2P_radiator_tip'])) {
                    if ($_POST['2_liter_1_2P_radiator_tip']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['2_liter_1_2P_radiator_tip'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_5l_truba = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_5l_truba." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_2_liter_1p_2p_otoplenie_radiator_tip');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_5l_truba_q = $row['quantity'];
                         $variable_otoplenie_5l_truba_s = $variable_otoplenie_5l_truba_q*$variable_otoplenie_5l_truba;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_5l_truba_s. $row['unit']."<br>";
                   }}}                                                   
                  ?>

                  <br>

                  <?php
                   if(isset($_POST['2_liter_3P_truba_tip'])) {
                    if ($_POST['2_liter_3P_truba_tip']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['2_liter_3P_truba_tip'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_5l_truba = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_5l_truba." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_2_liter_3p_otoplenie_truba_tip');  

                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_5l_truba_q = $row['quantity'];
                         $variable_otoplenie_5l_truba_s = $variable_otoplenie_5l_truba_q*$variable_otoplenie_5l_truba;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_5l_truba_s. $row['unit']."<br>";
                   }}}   
                  ?>
                  <br>

                  <?php

                   if(isset($_POST['2_liter_3P_radiator_tip'])) {
                    if ($_POST['2_liter_3P_radiator_tip']>0) {                    
                     $variableFilter = htmlspecialchars($_POST ['2_liter_3P_radiator_tip'], ENT_QUOTES, 'UTF-8');
                     $variable_otoplenie_5l_truba = $variableFilter;
                      echo "заказано на ".$variable_otoplenie_5l_truba." этажа"."<br>";                     
                      $query = $mysqli -> query('SELECT * FROM zapol39_2_liter_3p_otoplenie_radiator_tip');                        
                         while ($row=mysqli_fetch_assoc($query)){

                         $variable_otoplenie_5l_truba_q = $row['quantity'];
                         $variable_otoplenie_5l_truba_s = $variable_otoplenie_5l_truba_q*$variable_otoplenie_5l_truba;
                              
                         echo $row['name']. "  Итого = ".$variable_otoplenie_5l_truba_s. $row['unit']."<br>";
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