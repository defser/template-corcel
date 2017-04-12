<header class="header navbar-fixed-top">
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.15 37"><title>logo</title><g id="Camada_2" data-name="Camada 2"><g id="MENU"><g id="MENU-2" data-name="MENU"><text transform="translate(51.85 35.08) scale(0.99 1)" font-size="2.41" fill="#129bcd" font-family="DINBold">TM</text><g id="Shape_6" data-name="Shape 6"><path d="M26.78,0,0,27.86,9.19,37l4.93-5.13,4,3.94,8.7-9.05,8.7,9.05,4-3.94L44.38,37l9.19-9.15Zm-.84,25.19L18.05,33.4,15.3,30.65,25.95,19.58Zm0-8.05L9.17,34.59,2.37,27.83,25.95,3.31ZM35.51,33.4l-7.89-8.21V19.58L38.27,30.65ZM27.62,17.14V3.31L51.2,27.83,44.4,34.59Z" fill="#129bcd" fill-rule="evenodd"/></g></g></g></g></svg>
            <span class="c-name">Skyline</span>
          </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse col-md-8" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/sobre-a-skyline">Sobre a Skyline</a></li>

          <li class="dropdown">
            @if($typeDevice != "desktop")
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Serviços</a>
            @else
            <a href="/servicos">Serviços</a>
            @endif
            <div class="dropdown-menu">
                <div class="dropdown-wrapper">
                  <ul class="dropdown-list">
                    <li><a href="/servicos/teste">teste</a></li>
                  </ul>
                </div>
            </div>

            <li class="dropdown">
              <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Aplicações</a>

              <div class="dropdown-menu">
                  <div class="dropdown-wrapper">
                    <ul class="dropdown-list">
                     <li><a href="/servicos/teste">teste</a></li>
                    </ul>
                  </div>
              </div>
            </li>

            <li><a href="/cases">Cases</a></li>

            <li class="dropdown">
              <a href="/fale-conosco" class="dropdown-toggle" data-toggle="dropdown">Fale Conosco</a>
              <div class="dropdown-menu">

                  <div class="dropdown-wrapper">
                    <ul class="dropdown-list">
                        <li><a href="/fale-conosco/contato">Contato</a></li>
                        <li><a href="/fale-conosco/trabalhe-conosco">Trabalhe Conosco</a></li>
                        <li><a href="/fale-conosco/faq">FAQ</a></li>
                    </ul>
                  </div>
              </div>
            </li>
        </ul>
      </div> <!-- /.container -->
    </div><!-- /.navbar-collapse -->

    <div class="search col-md-1 col-xs-2">
      <a href="javascript:void(0)">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17">
          <g id="Camada_2" data-name="Camada 2">
              <g id="MENU">
                <g id="MENU-2" data-name="MENU">
                  <g id="Shape_1" data-name="Shape 1">
                    <path class="cls-1" d="M16.78,15.71l-3.36-3.36a7.65,7.65,0,0,0,1.7-4.8,7.56,7.56,0,1,0-7.56,7.56,7.48,7.48,0,0,0,4.76-1.7l3.36,3.36a.73.73,0,0,0,1.06,0A.7.7,0,0,0,16.78,15.71ZM7.56,13.6a6,6,0,1,1,6-6A6.06,6.06,0,0,1,7.56,13.6Z"/>
                  </g>
                </g>
              </g>
          </g>
        </svg>
        <span class="sr-only">Buscar</span>
      </a>
    </div>
  </nav>
</header>
