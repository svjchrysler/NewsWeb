@extends('layouts.app')

@section('content')

<div class="container" style="background-color: #FFF;">

  <div class="row">
    <div class="col-md-12" style="padding:0;">
      <img src="/img/img_santacruz.jpg" width="100%" alt="">
    </div>
  </div>

    
  <div class="row" style="width:100%">

    <div class="col-md-8 espacio" style="padding-right:0;">

      <!-- Categorias -->
      <div class="row" style="width:100%;">

        @foreach($array[1] as $category)
          <div class="col-md-4 col-sm-6 col-xs-12 separador-col">
            <div class="row fondo-category separacion tamano" >
              <a href="/content/category/{{ $category->id }}" class="select-category aling-center decoration-span">
                <div class="col-md-4 col-sm-4 col-xs-6 col-space">
                  <img src="{{ $category->image }}" class="img-responsive center-block" style="padding-right:.3em;" width="100%">
                </div>
                <div class="col-md-8 col-sm-8 col-xs-6 margin-col">
                  <span class="decoration-span">{{ $category->title }}</span>
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
          <h3 class="h5-style">Noticias</h3>

          @foreach($array[0] as $article)
           
            <div class="row row-style">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12 padding-col">
                      <?php $date = DateTime::createFromFormat('Y-m-d', $article->publicationDate)->format('d-m-Y'); ?>
                      <h4 class="h5-date">{{ $date }}</h4>
                    </div>
                    <div class="col-md-12 padding-col">
                      <a href="{{ url('article/news/'.$article->id) }}">
                        <p style="font-size:20px;">{{ $article->title }}</p>  
                      </a>
                      <div class="row">
                        @if($article->photo != "")
                          <div class="col-md-4">
                            <img src="{{ $article->photo }}" class="img-responsive" alt="">
                          </div>
                          <div class="col-md-8">
                            <p>
                              {{ $article->paragraph }}
                            </p>
                          </div>  
                        @else
                          <div class="col-md-12">
                            <p>
                              {{ $article->paragraph }}
                            </p>
                          </div>
                        @endif
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
                            
            
          @endforeach
          
          <br><br>
        </div>
        <br>
        <br>
      </div>
      <br>
    </div>

    <div class="col-md-4 hidden-xs" style="padding-right:0;padding-left:2em;">
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