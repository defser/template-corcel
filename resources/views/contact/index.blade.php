@extends('layout')

@section('title', 'Contato')

@section('content')
  <section class="contact-page container">
    <div class="col-md-6 col-sm-12 col-xs-12">

      <h2 class="title">Fale conosco</h2>

      <div class="form col-md-12 col-sm-12 col-xs-12 p0">
          <div class="errors col-md-12 col-sm-12 col-xs-12">
                @if (isset($errors))
                  @foreach ($errors->all() as $error)
                      <div class="alert-danger alert">{{ $error }}</div>
                  @endforeach
                @endif
              </div>

          <form id="form-contact" action="/send-contact" method="post">
            <div class="form-group ">
                <input type="text" name="name" class="form-control required" placeholder="Insira seu nome *">
            </div>

            <div class="form-group last">
                <input type="text" name="phone" class="form-control required" placeholder="Insira seu telefone *">
            </div>

            <div class="form-group">
                <input type="email" name="email" class="form-control required" placeholder="Insira seu email *">
            </div>

            <div class="form-group last">
              <select class="form-control" name="subject" id="subject">
                <option value="">Selecione o assunto</option>
                <option value="exemplo">Exemplo</option>
              </select>
            </div>

            <div class="textarea col-md-12 col-sm-12 col-xs-12 p0">
                <textarea class="form-control required" name="message" rows="6" placeholder="Insira sua mensagem *"></textarea>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <p class="btn-wrapper"><input type="button" class="btn btn-green button-form" value="Enviar Mensagem" /></p>
              <div class="message col-md-12 col-xs-12 col-sm-12 p0">
                  <img class="load-gif" src="/images/ajax-loader.gif">
                  <div class="contact-response"></div>
              </div>
            </div>

          </form>
      </div>
    </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
      <div class="row col-md-12 col-sm-12 col-xs-12">
            <h2 class="title">Localização</h2>
        </div>
        <div id="map" class="map p0 col-sm-12 col-xs-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14752.423980565814!2d-46.820143!3d-22.425036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa5e99f615b72ac2!2sToledo+Metais+-+ITAPIRA+SP!5e0!3m2!1spt-BR!2sbr!4v1491076397179" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
  </section>
@stop

