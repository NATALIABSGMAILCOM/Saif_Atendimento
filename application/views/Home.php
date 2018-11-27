<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Home</title>
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
          float-left:50px;
      }
      .coricone:hover{
          color: #D0D0D0; 
      }
      h4{
          box-sizing:border-box;
          margin-right: 50px;
          
      }
      .hr1{
          
          border-color:#aaa;
          box-sizing:border-box;
          width-center:50%;
      }
      .hr2{
          position: relative;
          border-color:white;
          box-sizing:border-box;
          width: 7.5em;
          background-color: white;
          margin-left: 2.0em;
      }
      .center{
          margin-left: auto;
          margin-right: auto;
          width: 6em;
          
          } 
          .titulo{
              height: 45px; 
              width: 150px;
              background-color: #147eba;                        
          }
          .corTitulo{
              font-size: 20px; 
              color: #ffffff; 
              margin-top: 5px; 
              margin-left: 45px;
          }
          .corTitulo2{
              font-size: 20px; 
              color: #ffffff; 
              margin-top: 5px; 
              margin-left: 27px;
          }
          #divlink {
    background-color: white;

    cursor: pointer;
}
          
          
          
          
  </style>
  
  
</head>
<body>
<section class="menu cid-qUcl6hfuGQ" once="menu" id="menu1-0" data-rv-view="340">

    

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
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="<?= base_url()?>index.php/Principal/inicio" class="fa fa-user-circle-o coricone" style="font-size:27px"></a>
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    
                    <a class="nav-link link text-white display-4" href="<?= base_url()?>Principal/inicio"></a>
                    
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="<?= base_url()?>Principal/inicio">
                        Olá, atendente</a></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4"  data-toggle="dropdown-submenu" aria-expanded="false"></a>
                            <div class="dropdown-menu" style="margin-left:-4.5em; width: 12.0rem; height: 10.0em">
                                
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Principal/meus_dados" aria-expanded="false">Meus dados<br></a>
                                <div class="card-box hr2">
                                    <hr/>
                                </div>
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Usuario/sair">Sair<br></a>
                            </div>
                        </li>
            </ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="">free web creator</a></section><section class="features6 cid-qVfSm00SVQ" id="features6-h" data-rv-view="342">
      <div class="container">
       <div class="media-container-row">    
        <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="titulo">
                <center><p class="corTitulo2" style="color: #ffffff">Sessão</p></center>
            </div>
              
            <div title="Acessar uma sessão que está em andamento." onclick="location='<?= base_url(); ?>Principal/atualizar_guiche'" id="divlink" class="card-img pb-3" href="<?= base_url(); ?>Principal/atualizar_guiche">
                    <center><span class="fa fa-eye" media-simple="true" style="color: #999999"></span></center>
                </div>
                <div class="card-box">
                    <center><a href="<?= base_url(); ?>Principal/atualizar_guiche" class="mbr-text mbr-fonts-style display-7" style="margin-right: px; color: #999999">Sessão em andamento</a></center>
                       
                </div>

                <div class="card-box">
                    <hr/>
                </div>
            
            <div title="Entrar em uma nova sessão." onclick="location='<?= base_url(); ?>Principal/add_guiche'" id="divlink" class="card-img pb-3">
                    <center><span class="fa fa-calendar-plus-o" media-simple="true" style="color: #999999"></span></center>
                </div>
                <div class="card-box">
                    <center><a href="<?= base_url(); ?>Principal/add_guiche" class="mbr-text mbr-fonts-style display-7" style="margin-right: px; color: #999999">Nova sessão</a></center>
                </div>
               
                              
                
                
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="titulo">
                    <center><p class="corTitulo2" style="color: #ffffff">Atendente</p></center>
                </div>
                <div title="Visualizar seus dados." onclick="location='<?= base_url(); ?>Principal/meus_dados'" id="divlink" class="card-img pb-3">
                    <center><span class="fa fa-user" media-simple="true" style="color: #999999"></span></center>
                </div>
                <div class="card-box">
                    <center><a href="<?= base_url()?>Principal/meus_dados" class="mbr-text mbr-fonts-style display-7" style="margin-right: px; color: #999999">Meus dados</a></center>
                </div>
                
            </div>
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="titulo">
        <center><p class="corTitulo" style="color: #ffffff">Painel</p></center>
    </div>
                <div title="Visualizar painel de atendente." onclick="location='<?= base_url(); ?>Principal/Painel'" id="divlink" class="card-img pb-3">
                    <center><span class="fa fa-television" media-simple="true" style="color: #999999"></span></center>
                </div>
                
                <div class="card-box" align="center">
                    <center><a href="<?= base_url()?>Principal/Painel" class="mbr-text mbr-fonts-style display-7" style=" color: #999999">Ver</a></center>
                </div>
            </div>
  </div>
</div>
</section>

<section once="" class="cid-qUcmvDbMKl" id="footer6-d" data-rv-view="345">

    <div class="container">
        <img src="assets/images/newlogo2-357x171.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem; position: relative; right: 3.5rem; top: 0.8rem">
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