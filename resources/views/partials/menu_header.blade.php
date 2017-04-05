<nav id="header" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <div class="bg-mobile"></div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Mostrar menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/" title="logo">
                <h1 class="logo">Logo</h1>
              <!--<img src="/images/logo_menu.png" />-->
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="navbarCollapse">
          <ul class="nav navbar-nav">
            <li class="item-list {{{ (Request::route()->getName() == 'home' ? 'active' : '') }}}"><a href="/" id="empresa-link">Início</a><div class="hover"></div></li>
            <li class="dropdown item-list {{{ (Request::route()->getName() == 'produtos' ? 'active' : '') }}}"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
              <ul class="dropdown-menu first-menu">
                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Telhas <b class="caret"></b></a>
                  <ul class="dropdown-menu submenu">
                    <li><a href="/produtos/telhas/telha-simples">Simples</a></li>
                    <li><a href="/produtos/telhas/telha-termoacustica">Termoacústica</a></li>
                    <li><a href="/produtos/telhas/telha-claridade">Claridade</a></li>
                    <li><a href="/produtos/telhas/telha-cumeeira">Cumeeira</a></li>
                    <li><a href="/produtos/telhas/telha-fixacao">Fixação</a></li>
                  </ul>
                </li>
                <li><a href="/produtos/corte-e-dobra">Corte e dobra</a></li>
                <li><a href="/produtos/laminados">Laminados</a></li>
                <li><a href="/produtos/tubos">Tubos</a></li>
                <li><a href="/produtos/vigas-e-perfis">Vigas e Perfis</a></li>
                <li><a href="/produtos/acessorios">Acessórios</a></li>
              </ul>
              <div class="hover"></div>
            </li>

            <li class="item-list {{{ (Request::route()->getName() == 'empresa' ? 'active' : '') }}}"><a href="/empresa" id="empresa-link">Empresa</a><div class="hover"></div></li>
            <li class="item-list {{{ (Request::route()->getName() == 'instrucoes' ? 'active' : '') }}}"><a href="/instrucoes" id="instrucoes-link">Instruções</a><div class="hover"></div></li>
            <li class="item-list last {{{ (Request::route()->getName() == 'contato' ? 'active' : '') }}}"><a href="/contato" id="contato-link">Contato</a><div class="hover"></div></li>
          </ul>
      </div>
  </div>
</nav>
