@extends('layouts.app')

@section('content')

<div class="container" style="background-color: #FFF;">
  <h3>Ultimas Noticias</h3>  
  <div class="row">
    <div class="col-md-9">
        <?php $count = 1; $sw = 0; ?>
        @foreach($articles as $article)
          <?php $sw = 0; ?>
          @if($count == 3)
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="{{ $article->photo }}" class="img-responsive">
                  <div class="caption row" style="max-height: 10em;">
                    <div class="col-md-12" style="overflow: hidden;">
                      <h4>{{ $article->title }}</h4>
                      <strong>Fecha:</strong> <small>{{ $article->publicationDate }}</small>
                    </div>
                    <div class="col-md-12">
                      <p class="text-right">
                        <a href="{{ url('/article/news/'.$article->id) }}">Leer</a>
                      </p>  
                    </div>                   
                  </div>
                </div>              
              </div>
            </div>

            <?php $count=1; $sw = 1; ?>    
          @endif

          @if($count == 2)
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="{{ $article->photo }}" class="img-responsive">
                  <div class="caption row" style="max-height: 10em;">
                    <div class="col-md-12" style="overflow: hidden;">
                      <h4>{{ $article->title }}</h4>
                      <strong>Fecha:</strong> <small>{{ $article->publicationDate }}</small>
                    </div>
                    <div class="col-md-12">
                      <p class="text-right">
                        <a href="{{ url('/article/news/'.$article->id) }}">Leer</a>
                      </p>  
                    </div>                   
                  </div>
                </div>              
              </div>  
            <?php $count++; ?>
          @endif   

          @if($count == 1 && $sw == 0)
            <div class="row">      
              <div class="col-md-4">
                <div class="thumbnail">
                  <img src="{{ $article->photo }}" class="img-responsive">
                  <div class="caption row" style="max-height: 10em;">
                    <div class="col-md-12" style="overflow: hidden;">
                      <h4>{{ $article->title }}</h4>  
                      <strong>Fecha:</strong> <small>{{ $article->publicationDate }}</small>
                    </div>
                    <div class="col-md-12">
                      <p class="text-right">
                        <a href="{{ url('/article/news/'.$article->id) }}">Leer</a>
                      </p>  
                    </div>                   
                  </div>
                </div>              
              </div>
            <?php $count++; ?>    
          @endif
                  
        @endforeach
        
        @if($count == 2 || $count == 3)
          </div>
        @endif
        
    </div>
    <div class="col-md-3 hidden-xs">
      
      <div class="panel panel-default">
        <div class="panel-heading">Boletines</div>
        <div class="panel-body">
            <div class="panel panel-success">
          <div class="panel-heading">Boletines Informativos 1</div>
          <div class="panel-body">
            <img src="img/logoice.png" class="img-responsive" width="100%" alt="">
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading">Boletines Informativos 2</div>
          <div class="panel-body">
            Boletin 2
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
@endsection
