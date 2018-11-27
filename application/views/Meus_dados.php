<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Meus dados</title>
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
  
  
</head>
<body>
<style>

      .coricone{
          color:white;
          float-left:50px;
      }
      .coricone:hover{
          color: #D0D0D0; 
      }
      .coricone2{
         position: relative;
         float: right;
         font-size: 30px;
      }
      .center{
          margin-left: auto;
          margin-right: auto;
          width: 6em;
          }
          .button{
          position: relative;
          float: right;
      }
      button{
         position: relative;
        text-align: center;
      }
      hr{
          
          border-color:white;
          box-sizing:border-box;
          width: 7.5em;
      }
        
</style>
<section class="menu cid-r0ZIpY3NYV" once="menu" id="menu1-16" data-rv-view="297">

    

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
                    
                         <a color="blue" href="<?= base_url()?>index.php/Principal/inicio" class="fa fa-arrow-left coricone" style="font-size:27px"></a>
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="<?= base_url()?>index.php/Principal/meus_dados" class="fa fa-user-circle-o coricone" style="font-size:27px"></a>
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="<?= base_url()?>Principal/meus_dados"></a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="<?= base_url()?>Principal/meus_dados">
                        Olá, atendente</a></li>
                        <li class="nav-item dropdown">
                                <a class="nav-link link text-white dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false"></a>
                                <div class="dropdown-menu" style="margin-left:-4.5em; width: 12.0rem; height: 10.0em">
                                
                                <a class="text-white dropdown-item display-4" href="<?= base_url()?>Principal/inicio" aria-expanded="false">Tela do Atendente</a>
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

<section class="engine"><a href="">free bootstrap builder</a></section><section class="features6 cid-r0ZIpZUi5c" id="features6-17" data-rv-view="299">
    
    

    
    <div class="container">
        <div class="media-container-row">


            <div class="card p-3 col-12 col-md-6">
                <center><h2 class="card-title py-3 mbr-fonts-style display-7 center" style="color:#147eba; font-size: 1.5em">Meus dados</h2></center>
                <div class="card-img pb-3">
                    <span class="" media-simple="true"></span>
                </div>
                
                <div class="card-box">
                   
                    <b class="mbr-text mbr-fonts-style display-7">Nome:</b> <span class="mbr-text mbr-fonts-style display-7"><?= $this->session->userdata('saif_usuario')->nome?></span> 
                    <span class="mbr-text mbr-fonts-style display-7" data-toggle="tooltip"><a href="<?=base_url()?>principal/editar_nome" class="fa fa-edit coricone2" style="color: #999999"></a></span><hr/>
                    
                    <b class="mbr-text mbr-fonts-style display-7">E-mail: </b> <span class="mbr-text mbr-fonts-style display-7"><?= $this->session->userdata('saif_usuario')->login?></span> 
                    <span class="mbr-text mbr-fonts-style display-7" data-toggle="tooltip"><a href="<?=base_url()?>principal/editar_email" class="fa fa-edit coricone2" style="color: #999999"></a></span><hr/>
                    
                    <b class="mbr-text mbr-fonts-style display-7">CPF: </b> <span class="mbr-text mbr-fonts-style display-7"><?= $this->session->userdata('saif_usuario')->cpf?></span> 
                    <span class="mbr-text mbr-fonts-style display-7" data-toggle="tooltip"><a href="<?=base_url()?>principal/editar_cpf" class="fa fa-edit coricone2" style="color: #999999"></a></span><hr/>
                    
                    <b class="mbr-text mbr-fonts-style display-7">RG: </b> <span class="mbr-text mbr-fonts-style display-7"><?= $this->session->userdata('saif_usuario')->rg?></span> 
                    <span class="mbr-text mbr-fonts-style display-7" data-toggle="tooltip"><a href="<?=base_url()?>principal/editar_rg" class="fa fa-edit coricone2" style="color: #999999"></a></span>
                   
                </div>
        
                <div class="">
        <div class="container">

                        <div class="row justify-content-center button">
                                  
                </div>
                </div>
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
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>