<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Editar Email</title>
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
          color:#999999;
          float-left:50px;
      }
      .coricone2:hover{
          color: #D0D0D0; 
      }
      .center{
          margin-left: auto;
          margin-right: auto;
          width: 6em;
          
          } 
      .bloco1{
          
          height: 300px; 
          width: 100%;
          background-color: white; 
      }
      .bloco2{
          height: 75px; 
          width: 100%;
           
          margin-top: 50px;
          }
       .campo1{
          position: relative;
          left: 50px;
          float: left;
          top: 26px;
          }
       .campo2{
           position: relative;
           float: left;
           left: 90px;
           top: 16px;
          }
          
          table{
              margin-top: 50px;
          }
          .tum{
              position: relative;
              top: 17px;
          }
          .tdois{
              position: relative;
              top: 17px;
          }
          .campo{
              position: relative;
              
          }
          button{
              width: 5px;
              height: 5px;
              position: relative;
              float: right;
          }
          .container{
              margin-top: 40px;
          }
          .um{
              
              float: left;
          }
          .dois{
              position: relative;
              float: right;
          }
          hr{
          
          border-color:white;
          box-sizing:border-box;
          width: 7.5em;
          }
          input{
              width: 8.5rem;
          }
          
  </style> 
    
<section class="menu cid-r0ZQXnIr9C" once="menu" id="menu1-1u" data-rv-view="273">

    

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
                
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#"></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="#" class="fa fa-user-circle-o coricone" style="font-size:27px"></a>
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    
                    <a class="nav-link link text-white display-4" href="#"></a>
                    
                </li><li class="nav-item"><a class="nav-link link text-white display-4" href="#">
                        Olá, atendente</a></li><li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false"></a>
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

<section class="engine"><a href="#">bootstrap templates</a></section>
  <section class="mbr-section form1 cid-r0ZKcOSVFP" id="form1-1l" data-rv-view="331">

    

    

    <div class="container">
        <p style="color:#147eba; font-size:21px; top: 10px">Editar E-mail</p>
        <div class="bloco1">
        <div class="campo1">
           <p>Novo e-mail:</p>
            <div class="um">
                 <form action="Principal/atualizar_email" method="post">
                <input style="width: 263px; border: 1px solid #C0C0C0" type="text" name="login" class="" required placeholder="">
                 <p>Confirmar e-mail:</p>
            <div class="um">
                
                <input style="width: 263px; border: 1px solid #C0C0C0" type="text" class="" required placeholder="">
                <div class="container" style="right: 1.0rem; position: relative">

                        <div class="row justify-content-center button">
                            <button class="btn btn-outline-danger" type="submit" style="width: 130px; height: 50px; margin-right: -10px"><span style="font-size:90%; position: absolute">Cancelar</span></button>
                            
                    
                <form method="post" action="<?=base_url(); ?>index.php/principal/tela_atendente">
                    <button class="btn btn-primary" type="submit" style="width: 130px; height: 50px; margin-right: -20px"><span style="font-size:90%; position: absolute">Confirmar</span></button>
                </form>           
                </div>
                </div>
           
   
    </div>
       
        <div class=""></div>
        <div class="row justify-content-md-center">
            <div class="container">
        
           
        </div>
    </div>
         <div class="mbr-crt-title">
                            
                            
                        </div>
</div>

</section>

<section once="" class="cid-r0ZQXq0AHF" id="footer6-1w" data-rv-view="278">

    

    

    <div class="container">
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