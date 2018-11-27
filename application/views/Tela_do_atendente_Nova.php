<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Tela Atendente Nova</title>
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style> 
      .coricone{
          color:white;
      }
      .coricone:hover{
          color: #D0D0D0; 
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
      .fichaazulmarinho{
          background: #147eba;
          width: 50%;
          height: 200px;
          color: white;
          margin-bottom: 35px;
          margin-top: 7.0em;
          position: relative;
          margin-left: auto;
          margin-right: auto;
          
      }
      .fichaazulmarinho:after, .fichaazulmarinho:before{
          content: '';
          width: 65px;
          height: 65px;
          border-radius: 50%;
          background: #eee;/*#eee*/
          position: absolute;
          top: 35.5%;
      }
      .fichaazulmarinho:after{
          left:-30px;
      }
      .fichaazulmarinho:before{
          right: -30px;
      }
     
      
      
    
      .b2{
          margin-top: 7.5em;
          position: absolute;
          margin-left: 8.5em;
      }
      
      .media-container-row mbr-figure{
          margin: 0 auto; 
      }
      .pt-5{
          padding-top: 1.5rem !important;
      }
      hr{
          
          border-color:white;
          box-sizing:border-box;
          width: 7.5em;
      }
      .cid-qVfSm00SVQ{
            display: flex;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            align-items: center;
            -webkit-align-items: center;
            min-height: 83vh;
            padding-top: 3rem;
            padding-bottom: 3rem;
          }
          .cid-r0ZKcOSVFP {
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            -webkit-align-items: center;
            min-height: 83vh;
            padding-top: 8rem;
            padding-bottom: 3rem;
          }
  </style>
  
  <script type="text/javascript">
        function clickLink() {
            var i = <?= $qnt->ficha_atual?>;
            if (i <= <?= $qnt->qnt_ficha - 1 ?>){
                i++;
            }
            var proxFichas = document.getElementsByClassName("pf");
            proxFichas[0].innerHTML = i + 0; 
            proxFichas[1].innerHTML = i + 1;
            proxFichas[2].innerHTML = i + 2;
            proxFichas[3].innerHTML = i + 3;
            proxFichas[4].innerHTML = i + 4;
           
         
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
            
          
                
            //document.getElementById("ficha").innerHTML = i;
            
        }
    </script>
  
</head>
<body onload="clickLink()">
<section class="menu cid-qUcl6hfuGQ" once="menu" id="menu1-0" data-rv-view="104">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div bgcolor="red" class="navbar-brand">
                <span>
                    <a color="blue" href="<?= base_url()?>principal/inicio" class="fa fa-arrow-left coricone"></a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="<?=base_url(); ?>principal/tela_atendente"" class="fa fa-user-circle-o coricone" style="font-size:27px"></a>
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="<?=base_url(); ?>principal/tela_atendente""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="<?=base_url(); ?>Principal/tela_atendente">
                        Olá, atendente</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link text-white dropdown-toggle display-4" href="<?=base_url(); ?>principal/tela_atendente"" data-toggle="dropdown-submenu" aria-expanded="false"></a>
                            <div class="dropdown-menu" style="margin-left:-4.5em; width: 12.0rem; height: 10.0em">
                                
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Principal/meus_dados" aria-expanded="false">Meus dados<br></a>
                                <div class="card-box hr2">
                                    <hr/>
                                </div>
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Usuario/sair">Sair<br></a>
                            </div>
                        </li></ul>
        
    </nav>
</section>

<section class="mbr-section form1 cid-r0ZKcOSVFP" id="form1-1l" data-rv-view="331">
    
    <div class="row justify-content-center">

    

    <div class="container">
      
        <div class="media-container-row pt-5">
            <div class="block-content align-right">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            
                        </div>
                        <div class="mbr-crt-title" style="right: 100px; top: 75px; position: relative">
                            
                            <table bgcolor="ffffff" bordercolor="#cfcfcf" border="1" style="width:250px">
                                <tr bgcolor="#e4e4e4" background="pink"><td><h4 style="color:#147eba; margin-top: 20px" align="center" class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Fichas Atendidas</h4></td></tr>
                                <tr><td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center"></td></tr>
                                <tr><td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center"></td></tr>
                                <tr><td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center"></td></tr>
                                <tr><td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center"></td></tr>
                                <tr><td class="mbr-text mbr-section-text mbr-fonts-style display-7 atendidas" align="center"></td></tr>


                            </table>
                        </div>
                    </div>                

                    
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-drag-n-drop2" style="font-size: 1px;" media-simple="true"></span>
                        </div>
                        <div class="mbr-crt-title">
                            
                            
                            
                        </div>
                    </div>
                    <div class="card-box">
                        <p class="mbr-text mbr-section-text mbr-fonts-style display-7"></p>
                    </div>
                </div>
            </div>
                
            <div class="mbr-figure" style="margin-top: 0;width: 50%; position: relative; overflow: hidden;">
                
        <div style="width: 70%; margin-left: auto; margin-right: auto;">
            <button type="button" class="btn btn-outline-secondary" style="height: 60px;width: 80px;font-size: 2.5em;padding: 0px;color: #147eba;border: 3px solid #147eba; margin-top: 0.2em"><?= $qnt->guiche ?></button>
                <span style="    font-weight: bold;border-bottom: 3px solid #147eba;padding: 0px 25px 5px 40px;color: #147eba;text-align: center;font-size: 1.8em; margin-left: -18px;position: relative;">Meu Guichê</span>
        </div>
                <h4 style="font-weight: bold; color: #147eba;left: 9.0em;font-size: 1.5em; margin-top:3.0em; position: absolute">Ficha Atual</h4>
                <div class="fichaazulmarinho" style="position: relative">
                    
                    <span class="mbr-fonts-style" style="width: 100%;float: left;padding-top: 2.0em;text-align: center;font-size: 1.5em;"></span>
                    
                    <h4 id ="ficha" class="mbr-section-title pb-2 mbr-fonts-style " style="width: 100%;float: left;text-align: center;font-size: 6em;margin-top: 0px;line-height: 1;"><?= $qnt->ficha_atual?></h4>
                    
                </div>
                
            </div>

            <div class="block-content align-left  ">
                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                             <span class="mbr-iconfont mbri-features" style="font-size: 1px;" media-simple="true"></span>
                        </div>
                        <div class="card-box" style="left: 100px; top: 70px; position: relative">
                        <table bordercolor="#cfcfcf" border="1" style="width:250px">
                                <tr bgcolor="#e4e4e4"><td><h4 style="color:#147eba; margin-top: 10px" align="center" class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">Próximas Fichas</h4></td></tr>
                                <tr><td bgcolor="ffffff" class="mbr-text mbr-section-text mbr-fonts-style display-7 pf" align="center">0</td></tr>
                                <tr><td bgcolor="ffffff" class="mbr-text mbr-section-text mbr-fonts-style display-7 pf" align="center">0</td></tr>
                                <tr><td bgcolor="ffffff" class="mbr-text mbr-section-text mbr-fonts-style display-7 pf" align="center">0</td></tr>
                                <tr><td  bgcolor="ffffff" class="mbr-text mbr-section-text mbr-fonts-style display-7 pf" align="center">0</td></tr>
                                <tr><td  bgcolor="ffffff" class="mbr-text mbr-section-text mbr-fonts-style display-7 pf" align="center">0</td></tr>
                            </table>
                    </div>
                        <form class="b2" method="post" action="principal/proximaFichaN/<?=$qnt->id?>/<?=$this->session->userdata('saif_usuario')->guiche_atual?>">
                            <button type="submit" class="btn btn-primary" style=" top: -20px; width: 250px; height: 60px; right: 3.0rem; position: relative">Chamar proxima</button>
                        </form>    
                    </div>                

                    
                </div>

                <div class="card pl-3 pr-3 pb-5">
                    <div class="mbr-card-img-title">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mbri-sites" style="font-size: 1px;" media-simple="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
</section>

<section once="" class="cid-qUcmvDbMKl" id="footer6-d" data-rv-view="109" style="">

    

    

    <div class="container">
        <img class="glyphicon-arrow-left" src="assets/images/newlogo2-357x171.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem; position: relative; right: 6.5rem">
        <div class="media-container-row align-center mbr-white">
            <span class="navbar-logo">            
                                          
                </span>
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7" style="position: relative; left: 9.5rem">Sistema de Atendimento do Instituto Federal<br><br></p>
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