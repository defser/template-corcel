@extends('layout')

@section('content')
    <div class="home">

        <div class="custom-panel">
            <h1>Texto título</h1>
        </div>

        <div id="empresa" class="container">
            <div class="about">
                <div class="row pt50">

                    <div class="col-md-6 col-xs-12">
                        <h2>Titulo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, optio, voluptates. Facilis nesciunt illo ullam, asperiores a quod nam deserunt sunt delectus, praesentium adipisci vitae, sed dolores perspiciatis amet id.</p>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        
                        <a class="fancybox button-ampliar" rel="group" href="/images/post-sample-image.jpg">
                            <strong>+</strong> ver fotos
                        </a>

                        <a class="fancybox hidden-md hidden-lg hidden-sm hidden-xs" rel="group" href="/images/post-sample-image.jpg">
                            <img src="/images/post-sample-image.jpg" alt="" />
                        </a>
                        
                    </div>

                </div>
                
                <div class="row pt50">

                    <div class="col-md-6 col-xs-12">
                        <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&txt=550%C3%97150&w=500&h=250" alt="">
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <h2>Titulo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, optio, voluptates. Facilis nesciunt illo ullam, asperiores a quod nam deserunt sunt delectus, praesentium adipisci vitae, sed dolores perspiciatis amet id.</p>
                    </div>

                </div>

                <div class="row pt50">
                    <div class="col-md-4 col-xs-12">
                        <h2>Texto 1</h2>
                        <p>HTML is a markup language that is used for creating web pages. The HTML tutorial section will help you understand the basics of HTML, so that you can create your own web pages or website.</p>
                        <p><a href="#/html-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h2>CSS</h2>
                        <p>CSS is used for describing the presentation of web pages. The CSS tutorial section will help you learn the essentials of CSS, so that you can fine control the style and layout of your HTML document.</p>
                        <p><a href="#/css-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <h2>Bootstrap</h2>
                        <p>Bootstrap is a powerful front-end framework for faster and easier web development. The Bootstrap tutorial section will help you learn the techniques of Bootstrap so that you can create web your own website.</p>
                        <p><a href="#/twitter-bootstrap-tutorial/" target="_blank" class="btn btn-success">Learn More &raquo;</a></p>
                    </div>
                </div>
            </div>

        </div>

        <div id="contato" class="contact">
            <div class="row pt50">
                <div id="map"></div>
            </div>

            <div class="container">
            
                <div class="row col-md-7">
                    <h2 class="title">Endereço
                    Fone (51) 33333333
                    <a href="mailto:asd@asd.com.br">asd@asd.com.br</a></h2>
                </div>

                <div class="form col-md-12">

                    <h4 class="subtitle">Envie sua mensagem</h4>
                    <span class="obrigatory-fields">(*) campos obrigatórios</span>

                    <form id="form-contact">
                        <div class="first-collum col-md-5">

                            <div class="form-group row">
                                <div class="input col-md-9 col-xs-9">
                                    <input type="text" name="name" class="form-control required" placeholder="nome *">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="input col-md-9 col-xs-9">
                                    <input type="email" name="email" class="form-control required email" placeholder="email *">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="input col-md-9 col-xs-9">
                                    <input type="text" name="phone" class="form-control phone" placeholder="telefone">
                                </div>
                            </div>
                        </div>
                        
                        <div class="second-collum col-md-7">
                            <div class="form-group textarea">
                                <textarea class="form-control required" name="message" rows="6" placeholder="mensagem *"></textarea>
                            </div>

                            <div class="col-md-12 p0">
                                <div class="message col-md-10 p0">
                                    <img class="load-gif" src="/Images/ajax-loader.gif">
                                    <div class="contact-response"></div>
                                </div>

                                <div class="col-md-2 p0">
                                    <input type="button" class="btn btn-primary button-form" value="Enviar"/>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@stop

