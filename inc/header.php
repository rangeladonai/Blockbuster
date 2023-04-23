<script>
  function deslogar(){
    var end = 'controller/loginController.php?action=deslogar';
    window.location.href = end;
  }
</script>

<header class="ht-header">
  <div class="container">
    <nav class="navbar navbar-default navbar-custom">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header logo">
        <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <div id="nav-icon1">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <a href="?page=filmes"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav flex-child-menu menu-left">
          <li class="hidden">
            <a href="#page-top"></a>
          </li>
          <li><a href="?page=filmes">Filmes</a></li>
          <?php if ($GLOBALS['usuarioLogado']) : ?>
          <li><a href="?page=cadastrar-filme">Cadastrar Filme</a></li>
          <?php endif; ?>
        </ul>
        <?php
        if (!$GLOBALS['usuarioLogado']) :
        ?>
          <ul class="nav navbar-nav flex-child-menu menu-right">
            <li class="loginLink"><a href="#">Login</a></li>
            <li class="btn signupLink"><a href="#">Cadastrar</a></li>
          </ul>
        <?php else : ?>
          <ul class="nav navbar-nav flex-child-menu menu-right">
            <li><a href="?page=painel-usuario"><li><?php if($GLOBALS['usuarioLogado'] == true) { echo $_SESSION['usuario']; } else { echo '';}?></li></a></li>
            <li class="btn"><a href="#" onclick="deslogar();">Sair</a></li>
          </ul>
        <?php endif; ?>
      </div>
      <!-- /.navbar-collapse -->
    </nav>

  </div>
</header>
<!-- END | Header -->