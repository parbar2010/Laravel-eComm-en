@extends('master')
@section('content')
 
  <div class="container custom-product">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            @foreach($products as $item)
                <div class="item {{$item['id']==1?'active':''}}">
                <img src="{{$item['gallery']}}" alt="Chania" width="400" height="400">
                <div class="carousel-caption">
                <img src="{{$item['gallery']}}" alt="Chania" width="400" height="400">
                    <h3 style="color:blue;">{{$item['name']}}</h3>
                    <p style="color:blue;">{{$item['description']}}</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Click For More..</a></p>
                </div>
                </div>
            @endforeach
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
  </div>
@endsection