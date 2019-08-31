<!DOCTYPE html>
<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/materialize/css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="<?=base_url()?>assets/style/social-share-kit.css" type="text/css">
      <link type="text/css" rel="stylesheet" href="<?=base_url()?>assets/style/main.css" />

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

  <body>
    <?php $this->load->view('main/navbar'); ?>
    <div class="pt-5" style="background:#F5F5F5">
      <?php $this->load->view($content);  ?>
    </div>
    <?php $this->load->view('main/footer'); ?>

      <!--JavaScript at end of body for optimized loading-->
    <script src="<?=base_url()?>assets/materialize/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/materialize/js/materialize.min.js"></script>        
    
    <!-- Social Share Kit JS -->
    <script type="text/javascript" src="<?=base_url()?>assets/js/social-share-kit.min.js"></script>    
    <script src="<?=base_url()?>assets/js/main.js"></script>
  </body>
</html>