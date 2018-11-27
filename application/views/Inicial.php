<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="Web Creator Description">
  <title>Inicial</title>
  <base href="<?php echo site_url(); ?>" />
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
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
      .content-container{
          right:20%;
      
      }
      .icon{
          position: relative;
          float: left;
          left: 20px;
          
      }
      h3{
          position: relative;
          right: 150px;
      }
  </style>
  
  
</head>
<body>
<section class="cid-r0ZCvvp8Pe mbr-fullscreen" id="header15-n" data-rv-view="337">

    

    

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <img src="assets/images/newlogo2-357x171.png" alt="Mobirise" title="" media-simple="true" style="height: 8.8rem; right:300px; margin-top: 5%">
        <p class="mbr-text pb-3 mbr-fonts-style display-5" style="top:10px; text-align: -0.5rem">
            Sistema de Atendimento do<br> 
            Instituto Federal</p>
    </div>
    
    <div class="col-lg-4 col-md-5">
      <a href="#" class="fa fa-user coricone icon" style="font-size:27px"></a>
        <h3 style="color: white">Atendente</h3>  
    <div class="form-container">
        
        <div class="media-container-column" data-form-type="formoid">
            
            <form class="mbr-form" action="<?= base_url()?>Usuario/autenticar" method="post">
                <div data-for="name">
                    <div class="form-group">
                        <input type="text" class="form-control px-3" name="login" data-form-field="Name" placeholder="Email" required="" id="name-header15-n">
                    </div>
                </div>
                <div data-for="email">
                    <div class="form-group">
                        <input type="password" class="form-control px-3" name="senha" data-form-field="Email" placeholder="Senha" required="" id="email-header15-n">
                        <P style="color:white">Não tem uma conta?</p><a href="<?= base_url()?>Principal/cadastro_atendente" style="color:white">Crie uma!</a>
                    </div>
                </div>
                
                
                <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-primary display-4">Acessar</button></span>
                <h4><?= $this->session->flashdata("msg");?></h4>
                
                
                
                
                
            </form>
        </div>
    </div>
    </div>
</div>
    </div>
    
</section>


  <section class="engine"><a href="#">bootstrap modal form</a></section><script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>