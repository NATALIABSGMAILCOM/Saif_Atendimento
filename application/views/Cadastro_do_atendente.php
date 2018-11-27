<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="">
  <title>Cadastro do atendente</title>
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
      .coricone2{
         position: relative;
         float: right;
         font-size: 30px;
      }
      .form-control{
          background-color: white;
      }
        
</style>
</head>

<body>
<section class="menu cid-r0ZIS4DQ3C" once="menu" id="menu1-1c" data-rv-view="313">

    

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
                    <a color="blue" href="<?= base_url()?>Principal/inicial" class="fa fa-arrow-left coricone" style="font-size:27px"></a>
                         
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#"></a></span>
            </div>
        </div>
        
    </nav>
</section>

<section class="mbr-section form1 cid-r0ZMhSBpiO" id="form1-1m" data-rv-view="315">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Informações pessoais</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5"></h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    
            
                <form class="mbr-form" action="<?=base_url() ?>Usuario/Salvar" method="post">
                        <div class="row row-sm-offset">
                            <div class="col-md-4 multi-horizontal" data-for="name">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="name-form1-1m">Nome</label>
                                    <input type="text" class="form-control" name="nome" data-form-field="Name" required id="name-form1-1m">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="email">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="email-form1-1m">Email</label>
                                    <input type="email" class="form-control" name="login" data-form-field="Email"  size="30" required id="email-form1-1m">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1m">CPF</label>
                                    <input type="tel" class="form-control" name="cpf" data-form-field="Phone" required id="phone-form1-1m" maxlength="14" OnKeyPress="formatar('###.###.###-##', this)">
                                </div>
                            </div>
                             <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1m">RG</label>
                                    <input type="tel" class="form-control" name="rg" required data-form-field="Phone" id="phone-form1-1m" maxlength="10" OnKeyPress="formatar('###.###-##', this)">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="phone">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1m">Senha</label>
                                    <input type="password" class="form-control" name="senha"  maxlength="10" required data-form-field="Phone" id="phone-form1-1m">
                                </div>
                            </div>
                        </div>
                        
            
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4">Confirmar</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-r0ZIScy0K8" id="footer6-1e" data-rv-view="318">

    

    

    <div class="container">
        <img src="assets/images/newlogo2-357x171.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem; position: relative; right: 6.5rem">
        <div class="media-container-row align-center mbr-white">
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
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>