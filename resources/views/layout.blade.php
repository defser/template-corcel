<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Template Corcel</title>
        
        <link rel="stylesheet" href="/css/all.css"/>
        <link rel="stylesheet" href="/css/app.css"/>

        <!-- Add fancyBox -->
        <link rel="stylesheet" href="/vendors/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <!-- Optionally add helpers - button, thumbnail and/or media -->
        <link rel="stylesheet" href="/vendors/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
        <link rel="stylesheet" href="/vendors/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    </head>
    
    <body>
        
        <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="sr-only">Mostrar menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Template Corcel</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav">
                            <li><a href="javascript:void(0);" id="empresa-link">Empresa</a></li>
                            <li><a href="javascript:void(0);" id="servicos-link">Serviços</a></li>
                            <li><a href="javascript:void(0);" id="blog-link">Blog</a></li>
                            <li><a href="javascript:void(0);" id="contato-link">Contato</a></li>
                        </ul>
                </div>
            </div>
        </nav>
        
        @yield('content')

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <footer>
                        <div class="col-md-6">
                            <p>endereço</p>
                            <p>CNPJ</p>
                        </div>

                        <div class="col-md-6">
                            <p>endereço</p>
                            <p>CNPJ</p>
                        </div>
                    </footer>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdf0HAC3k9Lc_hSPGIYCxsYPmm_S7Y6tY&callback=initMap" async defer></script>
        <script src="/js/all.js"> </script>    
        <!-- Add fancyBox -->
        <script type="text/javascript" src="/vendors/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script type="text/javascript" src="/vendors/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
        <script type="text/javascript" src="/vendors/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
        <script type="text/javascript" src="/vendors/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>       
    </body>
</html>      
                          		