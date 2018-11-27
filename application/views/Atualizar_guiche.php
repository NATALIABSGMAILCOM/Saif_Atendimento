<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Atualizar sessão</title>
  <base href="<?php echo site_url(); ?>" />
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
      .button{
          position: relative;
          float: right;
      }
      button{
          position: relative;
          right:1.3rem;
      }
      .cid-r0ZKcOSVFP{
          position: relative;
          width: 100%;
          height: 550px;
      }
      hr{
          
          border-color:white;
          box-sizing:border-box;
          width: 7.5em;
      }
      .form-control{
          background-color: white;
      }
  </style>  
  
  
</head>
<body>
<section class="menu cid-r0ZJ6Qpu31" once="menu" id="menu1-1i" data-rv-view="329">

    

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
                   <a href="<?= base_url(); ?>Principal/inicio" class="fa fa-arrow-left coricone" style="font-size:27px"></a> 
                         
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href=""></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="<?= base_url(); ?>Principal/atualizar_guiche" class="fa fa-user-circle-o coricone" style="font-size:27px"></a>
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" ></a>
                </li><li class="nav-item"><a class="nav-link link text-white display-4">
                        Olá, atendente!</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link link text-white dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false"></a>
                            <div class="dropdown-menu" style="margin-left:-4.5em; width: 12.0rem; height: 10.0em">
                                
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Principal/meus_dados" aria-expanded="false">Meus dados<br></a>
                                <div class="card-box">
                                    <hr/>
                                </div>
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Usuario/sair">Sair<br></a>
                            </div>
                        </li>
            </ul>
            
        </div>
    </nav>
</section>

    <section class="mbr-section form1 cid-r0ZKcOSVFP" id="form1-1l" data-rv-view="331">

    

    
    
        <div class="row justify-content-center">
            
            <div class="title col-12 col-lg-8">
                <div class="alert alert-secondary" style="color: #147eba" role="alert">
                Você irá ingressar na Sessão em Andamento!
            </div>
            
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Adicionar Gichê</h2>
                <form name="formularioModalidade" method="post" action="<?=base_url();?>Usuario/atualizarGuiche">
                <select name="guiche" id="inputState" class="form-control" style="width: 100%; height: 40px" required>
                    
                                <option selected></option>
                                <option  value="1">01</option>
                                <option  value="2">02</option>
                                <option  value="3">03</option>
                                <option  value="4">04</option>
                                <option  value="5">05</option>
                                
                            </select>
                
                    <div class="container">
                        <div class="row justify-content-center button">
                            <button class="btn btn-outline-danger" type="submit" style="width: 150px; height: 50px; margin-right: -10px"><span style="font-size:100%; position: absolute">Cancelar</span></button>
                    <button class="btn btn-primary" type="submit" style="width: 150px; height: 50px; margin-right: -20px"><span style="font-size:100%; position: absolute">Confirmar</span></button>
                   </form>       
                </div>
                </div>
                    
               
            </div>
        
        </div>
    
    
</section>
<section once="" class="cid-r0ZIq1MhbV" id="footer6-18" data-rv-view="302">

    

    

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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>