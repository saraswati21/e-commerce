@extends('master')

@section('content')

    <div class="container">
        <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner ">
                        @foreach($products as $item)
                            <div class="carousel-item {{$item['id']==1? 'active':''}} text-center">
                                <a href="detail/{{$item['id']}}">
                                    <img class="img-fluid trending-img" src="{{$item["gallery"]}}" class="d-block w-100 " alt="...">
                                    <div class="carousel-caption d-none d-md-block slider-text">
                                        <h4>{{$item['name']}}</h4>
                                        <p>{{$item['description']}}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
            <div class="trending-wrapper">
                <h1>Trending Products</h1>
                <div class="row ">
                    @foreach($products as $item)
                        <div class="trending-item m-0">
                            <a href="detail/{{$item['id']}}">
                                <img class="d-block w-100" src="{{$item["gallery"]}}">
                                <div>
                                    <h4>{{$item['name']}}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

    </div>

@endsection

