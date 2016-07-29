@extends('layouts.app')

@section('content')

<div class="container" style="background-color: #FFF;">
    
  <div class="row">

    <div class="col-md-8 espacio">

      <!-- Categorias -->
      <div class="row">

        @foreach($array[1] as $category)
          <div class="col-md-4 col-sm-6 col-xs-12 separador-col">
            <div class="row fondo-category separacion tamano">
              <a href="/content/category/{{ $category->id }}" class="select-category aling-center">
                <div class="col-md-4 col-sm-4 col-xs-6 col-space">
                  <img src="{{ $category->image }}" class="img-responsive center-block" style="padding-right:.3em;" width="100%">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-6 margin-col">
                  <span>{{ $category->title }}</span>
                </div>  
              </a>            
            </div>
          </div>
        @endforeach

        

      </div>

      <!-- Notas de prensa -->
      <br>
      <div class="row back">
        <div class="col-md-12">
          <h5 class="h5-style">Noticias</h5>


          <?php $count = 1; ?>
          @foreach($array[0] as $article)
            @if($count == 2)
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-12 padding-col">
                      <h5 class="h5-date">{{ $article->publicationDate }}</h5>
                    </div>
                    <div class="col-md-12 padding-col">
                      <a href="{{ url('article/news/'.$article->id) }}">
                        <p>{{ $article->title }}</p>
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
                      <h5 class="h5-date">{{ $article->publicationDate }}</h5>
                    </div>
                    <div class="col-md-12 padding-col">
                      <a href="{{ url('article/news/'.$article->id) }}">
                        <p>{{ $article->title }}</p>  
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
        <div class="panel-heading">Productos Estadisticos</div>
        <div class="panel-body">
        <div class="panel panel-success">
          <div class="panel-heading">Boletin Informativo</div>
          <div class="panel-body">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum interdum augue felis, quis bibendum nisl maximus eu. Nam vitae lacus turpis. Morbi cursus, tellus a eleifend iaculis, leo lectus consectetur quam, sit amet vestibulum nisi erat et est. Curabitur dictum blandit pulvinar. In tincidunt accumsan laoreet. 
            </p>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Estadisticas</div>
          <div class="panel-body">
            <canvas id="myChart" width="100%" height="100%"></canvas>
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