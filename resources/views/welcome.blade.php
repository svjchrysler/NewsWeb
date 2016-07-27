@extends('layouts.app')

@section('content')

<div class="container" style="background-color: #FFF;">
    
  <div class="row">

    <div class="col-md-8 espacio">

      <!-- Categorias -->
      <div class="row">

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/money.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Economia</span>
              </div>  
            </a>            
          </div>
        </div>

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/users-group.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Poblacion</span>
              </div>  
            </a>            
          </div>
        </div>

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/tractor-front.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Agricultura</span>
              </div>  
            </a>            
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/light-bulb-on.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Ambiente y Energia</span>
              </div>  
            </a>            
          </div>
        </div>

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/factory.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col" style="margin-top:1em;">
                <span>Industrias, Comercios, Servicios, Transporte</span>
              </div>  
            </a>            
          </div>
        </div>

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/world.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Comercion Internacional</span>
              </div>  
            </a>            
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/theatre-pillar.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Grecia en la figura</span>
              </div>  
            </a>            
          </div>
        </div>

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/diagram.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Datos Especiales</span>
              </div>  
            </a>            
          </div>
        </div>

        <div class="col-md-4 separador-col">
          <div class="row fondo-category separacion">
            <a href="/econony" class="select-category">
              <div class="col-md-4 col-space">
                <img src="icons/group.svg" width="100%">
              </div>
              <div class="col-md-8 margin-col">
                <span>Censo 2012</span>
              </div>  
            </a>            
          </div>
        </div>
      </div>

      <!-- Notas de prensa -->
      <br>
      <div class="row back">
        <div class="col-md-12">
          <h5 class="h5-style">Noticias</h5>


          <?php $count = 1; ?>
          @foreach($articles as $article)
            @if($count == 2)
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12 padding-col">
                      <h5 class="h5-date">23/07/2016</h5>
                    </div>
                    <div class="col-md-12 padding-col">
                      <a href="#">
                        <p>fdskfjsdlkfj  sdfjlsdjflñksdjflk sdjflk sdjfñlksdjflñskdj fñlsdkjf dsklfjlskd</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <?php $count = 1; ?>
            @else
              <div class="row row-style">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12 padding-col">
                      <h5 class="h5-date">23/07/2016</h5>
                    </div>
                    <div class="col-md-12 padding-col">
                      <a href="#">
                        <p>fdskfjsdlkfj  sdfjlsdjflñksdjflk sdjflk sdjfñlksdjflñskdj fñlsdkjf dsklfjlskd</p>  
                      </a>
                    </div>
                  </div>
                </div>  
              <?php $count++; ?>              
            @endif
          @endforeach

          @if($count == 2)
            </div>
          @endif

          <div class="row row-style">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12 padding-col">
                  <h5 class="h5-date">23/07/2016</h5>
                </div>
                <div class="col-md-12 padding-col">
                  <a href="#">
                    <p>fdskfjsdlkfj  sdfjlsdjflñksdjflk sdjflk sdjfñlksdjflñskdj fñlsdkjf dsklfjlskd jflkasdjflkasdj flñksadjf</p>  
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-12 padding-col">
                  <h5 class="h5-date">23/07/2016</h5>
                </div>
                <div class="col-md-12 padding-col">
                  <p>fdskfjsdlkfj  sdfjlsdjflñksdjflk sdjflk sdjfñlksdjflñskdj fñlsdkjf dsklfjlskd jflkasdjflkasdj flñksadjf</p>
                </div>
              </div>
            </div>
          </div>

          
          <br><br>
        </div>
        <br>
        <br>
      </div>
      <br>
    </div>

    <div class="col-md-4 hidden-xs">
      <br>
      <div class="panel panel-success">
        <div class="panel-heading">Boletines</div>
        <div class="panel-body">
            <div class="panel panel-success">
          <div class="panel-heading">Boletines Informativos 1</div>
          <div class="panel-body">
            <p>
              sdj flksajd;lfk jsa;dlfjs;ldkfj;ls kdjflaksjdlfahs;jdf hasdkjfhadksljgf alskdjhferhfoerhfiuerh jdhgjdfghdfljgh dflkjg
            </p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Estadisticas</div>
          <div class="panel-body">
            <canvas id="myChart" width="100%" height="100%"></canvas>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Boletines Informativos 3</div>
          <div class="panel-body">
            <img src="img/logogobernacion.png" class="img-responsive" alt="">
          </div>
        </div>
        </div>  
      </div>  
  
    </div>

  </div>

  </div>
</div>
@endsection

@section('script')
  {{ Html::script('js/estadisticas.js') }}
@endsection