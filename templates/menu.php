<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">Joslast.nl</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="color:white;">
        <?php 
          if(isset($_SESSION['userId'])) {
        ?>
          <li><a href="<?php echo URL_ROOT; ?>">Startpagina</a></li>
          <li><a href="<?php echo URL_ROOT . 'projecten/'; ?>">Mijn account</a></li>
          <li><a href="<?php echo URL_ROOT . 'tarieven/'; ?>">Mijn roosters</a></li>
          <li><a href="<?php echo URL_ROOT . 'over/'; ?>">Mijn klas</a></li>
          <li><a href="<?php echo URL_ROOT . 'contact/'; ?>">Contact</a></li>
          <li><a href="<?php echo URL_ROOT . 'inloggen/'; ?>">Uitloggen</a></li>
        <?php
          }
        ?>  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>