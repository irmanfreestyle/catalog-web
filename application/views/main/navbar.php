<div class="navbar-fixed">
  <nav class="white">
    <div class="nav-wrapper">
      <div class="container">
        <a href="<?=base_url()?>" class="brand-logo center">
          <img src="<?=base_url()?>assets/images/logo/<?=$logo?>" width="100px" height="65px">
        </a>
        <!-- <a href="#" data-target="mobile-demo" class="sidenav-trigger blue-grey-text"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="sass.html" class="blue-grey-text">Home</a></li>        
          <li><a href="sass.html" class="blue-grey-text">Home</a></li>        
          <li><a href="sass.html" class="blue-grey-text">Home</a></li>        
        </ul> -->
      </div>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>
</div>

<div class="ssk-sticky ssk-left ssk-center ">
    <?php foreach($socmeds as $socmed): ?>
      <a target="_blank" href="<?=$socmed->link?>" class="ssk ssk-<?=$socmed->nama_socmed?>"></a>
    <?php endforeach; ?>
</div>