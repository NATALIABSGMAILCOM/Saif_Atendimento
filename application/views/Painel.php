<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="4">
  <meta http-equiv="refresh" content="4">
  <title>Painel</title>
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style> 
      .coricone{
          color:white;
          float-left:50px;
      }
      .coricone:hover{
          color: #D0D0D0; 
      }
     
      .center{
          margin-left: auto;
          margin-right: auto;
          width: 6em;
      }     
    .cid-r0ZHHz2Xwr{
        background-color: white;
    }
    
    .cid-r0ZHHz2Xwr{
          position: relative;
          width: 100%;
          height: 575px;
      }
      .cid-r0ZHHAeEvm{
          position: relative;
          width: 100%;
          height: 150px;
      }
      .mbr-section-title .esquerdo{
          text-align: left;
      }
      .esquerdo{
          float: left;
      }
      .titulo{
          margin-right: 170px;
      }
      .numero{
          position: relative;
          top: 50px;
      }
      
      
      .fichaCinza{
          
          background: #7C7C7C;
          width: 200%;
          height: 130px;
          color: white;
          margin-bottom: 35px;
          margin-top: 74px;
          position: relative;
          margin-left: 120%;
          margin-right: auto;
          
      }
      
      .fichaCinza2:after, .fichaCinza2:before{
          content: '';
          width: 50px;
          height: 50px;
          border-radius: 50%;
          background: white;
          position: absolute;
          top: 32.5%;
      }
      .fichaCinza2:after{
          left:-25px;
      }
      .fichaCinza2:before{
          right: -25px;
      }
      
      /*FICHA Azul*/
      .Azul{
          background: #147eba;
          width: 295%;
          height: 195px;
          color: white;
          margin-bottom: 35px;
          margin-top: 35px;
          position: relative;
          margin-left: 20%;
          margin-right: auto;
          
      }
      .Azul2:after, .Azul2:before{
          content: '';
          width: 70px;
          height: 70px;
          border-radius: 50%;
          background: white;
          position: absolute;
          top: 33.5%;
      }
      .Azul2:after{
          left:-35px;
      }
      .Azul2:before{
          right: -35px;
      }
      .card.p-3.col-12.col-md-6.col-lg-4.bloc2{
          height: 470px;
          width: 500px;
          background-color: #f2f2f2;
          right: 14.5rem;
      }
      .cid-qVfSm00SVQ {
            display: flex;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            align-items: center;
            -webkit-align-items: center;
            min-height: 85vh;
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: white;
          }
      
  </style> 
  
 <script type="text/javascript">
  function atualiza(){
           
      if (sessionStorage.getItem("ultimaficha")){
          if (sessionStorage.getItem("ultimaficha") != <?= $qnt->ficha_atual?>){
             var x = document.getElementById("myAudio");
                x.play();  
      
        }  
      }
      sessionStorage.setItem("ultimaficha", <?= $qnt->ficha_atual?>);
        
      var i = <?= $qnt->ficha_atual?>;
     
      var at = document.getElementsByClassName("atendidas");
          
            if ((i - 2) < 0){
                at[0].innerHTML = 0;
            }else{
                at[0].innerHTML = i - 2;
            }
            
            if ((i - 3) < 0){
                at[1].innerHTML = 0;
            }else{
                at[1].innerHTML = i - 3;
            }
            
            if ((i - 4) < 0){
                at[2].innerHTML = 0;
            }else{
                at[2].innerHTML = i - 4;
            }
            
            if ((i - 5) < 0){
                at[3].innerHTML = 0;
            }else{
                at[3].innerHTML = i - 5;
            }
            
            if ((i - 6) < 0){
                at[4].innerHTML = 0;
            }else{
                at[4].innerHTML = i - 6;
            }
  
  }
  </script>
</head>
<body onload="atualiza()">
<audio id="myAudio">
    <source src="<?= base_url('assets/Senha.mp3')?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<section class="menu cid-r0ZHHxuQ8T" once="menu" id="menu1-r" data-rv-view="257">

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                         
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="<?= base_url()?>Principal/Painel"></a></span>
                <h2 class="display-7 center" style="color: white; left: -10.5rem; font-size: 1.2em; position: relative">Por favor, aguarde!</h2>
            </div> 
            
        </div>
 
            <a href="<?= base_url()?>Principal/Painel" class="fa fa-clock-o coricone" style="font-size:27px; position: relative; right: 50px"></a>
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a  class="nav-link link text-white display-4" href="#"></a>
                </li><li class="nav-item"><a style=" font-size:25px; position: relative; right: 50px" class="nav-link link text-white display-4" href="<?= base_url()?>Principal/Painel">
                        <?php date_default_timezone_set('America/Sao_Paulo'); echo date('H:i') ?></a>  
        
    </nav>
                
</section>

<section class=" cid-qVfSm00SVQ" id="features6-s" data-rv-view="259">
    
    

    
    <div class="container bloc1">
        <div class="media-container-row">
            
<div class="card p-3 col-12 col-md-6 col-lg-4 bloc2">
                
            <h4 class="card-title py-3 mbr-fonts-style display-7" style="color: #147eba; text-align: center" >Últimas fichas chamadas</h4>
            <center>
                <table bgcolor="ffffff" bordercolor="#cfcfcf" border="1" style="width: 190px; height: 50px">
                   <tr bgcolor="#e4e4e4" background="pink">
                       <td><h4 style="color:#147eba; text-align:center; margin-top: 10px" class="card-title py-2 mbr-crt-title mbr-fonts-style display-7 center" >Ficha</h4></td>
                    </tr>
                    <tr>
                        <td class="mbr-text mbr-section-text mbr-fonts-style display-7  atendidas" align="center">--</td>
                         
                        
                    </tr>
                    <tr>
                        <td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center">--</td>
                         
                        
                    </tr>
                    <tr>
                        <td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center">--</td>
                         
                        
                    </tr>
                    <tr>
                        <td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center">--</td>
                         
                        
                    </tr>
                    <tr>
                        <td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center">--</td>
                         
                        
                    </tr>
                </table>
            </center>
                
            </div>
            
                <!--FICHA ATUAL-->

                <div class="card-img pb-3 ficha" style="margin-left: -209px;">
                    <h2 class="display-7" style="color:#666666; text-align: center; font-size: 2.7em; position: relative; left: 110px;">Ficha atual</h2>
                   
                    <div class="center"><div class="Azul Azul2" style="position: relative">
                    <h4 id ="ultimaficha" class="mbr-section-title pb-2 mbr-fonts-style " style="width: 100%;float: left;text-align: center;font-size: 8em;margin-top: 25px;line-height: 1;"><?= $qnt->ficha_atual?></h4>
                    
                    
                </div>
                 </div>
                    <div class="card-box">
                    <h3 class="display-7 center" style="color:#666666; text-align: center; float: left;font-size: 1.5em; position: relative; left: 115px;">Guichê 0<?= $qnt->guiche?></h3>
                    
                </div>
                </div>
                
                
            <!--FICHA ANTERIOR-->
                    
                <div class="card-img pb-3 ficha" style="padding-left:100px;">
                    <h2 class="display-7" style="font-size: 2em; color: #666666; position: relative; left: 75%; top: 35px">Ficha anterior</h2>
                        <div class="center">
                            
                            <div class="fichaCinza2 fichaCinza" style="position: relative">
                                <h4 id ="ficha" class="mbr-section-title pb-2 mbr-fonts-style anterior" style="width: 100%; float: left; text-align: center;font-size: 4em;margin-top: 25px;line-height: 1; margin-top: 30px;"><?php if($qnt->ficha_atual > 0) { echo $qnt->ficha_atual-1; }else{ echo 0; } ?></h4>
                        </div>
                  </div>
                
                <div class="card-box">
                    <center><h3 class="display-7 center " style="color:#666666; text-align: center; font-size: 1.5em; position: relative; left: 115%;">Guichê 0<?= $qnt->guiche_anterior?></h3></center>
                    
                </div>
            </div>

        </div>

    </div>

</section>

<section once="" class="cid-r0ZHHAeEvm" id="footer6-t" data-rv-view="262">

    

    

    <div class="container">
        <img src="http://fases.ifrn.edu.br/wp-content/uploads/2018/02/fases-1.png" class="iamaze-logo normal-logo" style="height: 3.8rem; position: relative; right: 3.5rem; top: 0.8rem"/>
        <img src="assets/images/newlogo2-357x171.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem; right: 3.5rem">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7" style="position: relative; left: 6.5rem">Sistema de Atendimento do Instituto Federal<br><br></p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>