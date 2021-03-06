@extends ('app')

@section('title')
Cómo Llegar | 
@stop

@section('description')
La segunda edición del seminario se llevará a cabo, al igual que la edición anterior, en el Aula Magna del Hospital Universitario Fundación Jiménez Diaz.
@stop

@section('content')
<ul class="breadcrumb">
  <li><a href="/"><span class="fa fa-home aqua"></span></a></li>
  <li><span class="fa fa-map-marker"></span> Cómo Llegar</li>
</ul>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <iframe id="map" src="https://mapsengine.google.com/map/u/0/embed?mid=zSBBmPYybDpM.kgYSBLH1Ij-c"></iframe>
  </div>
</div>
<div class="row">
  <div class="col-md-10 col-md-offset-1 accordion" rel="1">
        <h1 class="invisible">Direcciones</h1>
        <!-- LOCALIZACION -->
        <div class="accordion-title active">
            <h2 class="neo-sans-text"><a href="#">Localización</a></h2>
        </div>
        <div class="accordion-inner default">
            <div class="row">
                <div class="col-md-5 col-sm-6 col-md-offset-1 col-sm-offset-1">
                    <h3 class="bold">Hospital Universitario Fundación Jiménez Díaz.<br>Aula Magna.</h3>
                    <h3>Avda. Reyes Católicos, 2</h3>
                    <h3>28040 – Madrid</h3>
                </div>
                <div class="col-md-5 col-sm-3">
                    <img src="img/logo-fundacion-jimenez-diaz.png" alt="Fundación Jiménez Díaz">
                </div>
            </div>                  
        </div>
        <!-- METRO -->
        <div class="accordion-title">
            <h2 class="neo-sans-text"><a href="#">Si viene en Metro</a></h2>
        </div>
        <div class="accordion-inner">
            <div class="row">
                <div class="col-sm-3 col-md-offset-1 col-sm-offset-1">
                    <!-- <img src="img/icono-metro.png" alt="Metro de Madrid"> -->
                    <span class="fa fa-subway fa-5x aqua block center margin-top-10"></span>
                </div>          
                <div class="col-sm-6">
                    <ul class="margin-top-10">
                        <li>Moncloa</li>
                        <li>Islas Filipinas</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- BUS -->
        <div class="accordion-title">
            <h2 class="neo-sans-text"><a href="#">Si viene en Autobús</a></h2>
        </div>
        <div class="accordion-inner">
            <div class="row">
                <div class="col-sm-2 col-md-offset-1 col-sm-offset-1">
                    <!-- <img src="img/icono-autobus.png" alt="Autobuses de Madrid"> -->
                    <span class="fa fa-bus fa-5x aqua block center margin-top-10"></span>
                </div>
                <div class="col-sm-4">
                    <ul  class="margin-top-10">
                        <li>Línea 1</li>
                        <li>Línea 12</li>
                        <li>Línea 44</li>
                        <li>Línea 82</li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li>Línea 132</li>
                        <li>Línea C</li>
                        <li>Línea G</li>
                    </ul>
                </div>
            </div>
        </div>
  </div>
</div>
@stop

@section('javascript')
  <script type='text/javascript'>
    $(document).ready(function($){
      $('.accordion').each(function(){
          var acc = $(this).attr('rel') * 2;
          $(this).find('.accordion-inner:nth-child(' + acc + ')').show();
           $(this).find('.accordion-inner:nth-child(' + acc + ')').prev().addClass('active');
      });

      $('.accordion .accordion-title').click(function() {
          if($(this).next().is(':hidden')) {
              $(this).parent().find('.accordion-title').removeClass('active').next().slideUp(200);
              $(this).toggleClass('active').next().slideDown(200);
          }
          return false;
      });
    });
  </script>
@stop